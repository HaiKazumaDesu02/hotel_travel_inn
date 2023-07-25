<?php

namespace App\Http\Controllers;

use App\Models\BillItems;
use App\Models\Bills;
use App\Models\Booking;
use App\Models\Occupants;
use Illuminate\Http\Request;
use Carbon\Carbon;

class GuestBillController extends Controller
{
    public function guestBill($id, Request $request){
        $occupant = Occupants::where('id', $id)->first();
        $billItems = BillItems::where('bill_id', $occupant->bill->id)->get();
        $total_bill_items = $billItems->sum('total');
        return view('occupants.guest-bill', compact('occupant', 'billItems', 'total_bill_items'));
    }
    
    public function addItems(Request $request)
    {
        $billItem = BillItems::create([
            'bill_id' => $request->bill_id,
            'item_name' => $request->item_name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'total' => $request->price * $request->quantity
        ]);
        $billId = $request->bill_id;
        $billItems = BillItems::where('bill_id', $billId)->get();
        $totalBillItems = $billItems->sum('total');
    
        // Retrieve the Bill model instance
        $bill = Bills::findOrFail($billId);
        
    
        // Update the properties of the Bill model
        $bill->sub_total = $totalBillItems;
        $bill->total = $totalBillItems - $bill->discount - $bill->occupant->advance_payment;
        $bill->save();
        
        return redirect()->back();
    }
    

    public function finalBill($id){
        $booking = Booking::all();
        $occupant = Occupants::where('id', $id)->first();
        $billItems = BillItems::where('bill_id',$occupant->bill->id)->get();
        return view('occupants.final-bill', compact('billItems', 'occupant', 'booking'));

    }

    public function billUpdate(Request $request){
        $billItem = BillItems::where('id',$request->billItem_id)->first();
        $billItem->update([
            'item_name'=>$request->item_name,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            'total'=>$request->quantity*$request->price,
        ]);
        $billId = $request->bill_id;
        $billItems = BillItems::where('bill_id', $billId)->get();
        $totalBillItems = $billItems->sum('total');
    
        // Retrieve the Bill model instance
        $bill = Bills::findOrFail($billId);
    
        // Update the properties of the Bill model
        $bill->sub_total = $totalBillItems;
        $bill->total = $totalBillItems - $bill->discount - $bill->occupant->advance_payment;
        $bill->save();
        return redirect()->back();
    }

        public function itemDelete($id, Request $request){
            $billItem = BillItems::where('id', $id)->first();
            $billItem->delete();
            
            $billId = $request->bill_id;
            $billItems = BillItems::where('bill_id', $billId)->get();
            $totalBillItems = $billItems->sum('total');
        
            // Retrieve the Bill model instance
            $bill = Bills::findOrFail($billId);
        
            // Update the properties of the Bill model
            $bill->sub_total = $totalBillItems;
            $bill->total = $totalBillItems - $bill->discount - $bill->occupant->advance_payment;
            $bill->save();
            
            return redirect()->back();
        }

    public function billDiscount(Request $request){
        $occupant = Occupants::where('id', $request->occupant_id)->first();
        $bill = $occupant->bill;
        $billItems = BillItems::where('bill_id', $occupant->bill->id)->get();
        $sub_total = $billItems->sum('total');
        $bill->discount = $request->discount;
        $bill->sub_total = $sub_total;
        $bill->total = $sub_total - $request->discount - $bill->occupant->advance_payment;
        $bill->save();
        return redirect()->back();

         
        
    }
}
