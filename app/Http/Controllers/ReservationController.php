<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request){
        // return 'oki';
        $reservation = Reservation::create([
            'room_type' => $request->room_type,
            'check_in' => $request->check_in,
            'check_in_time' => $request->check_in_time,
            'check_out' => $request->check_out,
            'check_out_time' => $request->check_out_time,
            'adults' => $request->adults,
            'children' => $request->children,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'zip_code' => $request->zip_code,
            'city' => $request->city,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        return redirect()->back();
    }

    public function index(){
        $reservations = Reservation::orderBy('created_at', 'desc')->paginate(10);
        $status = null;
        return view('reservations.index', compact('reservations', 'status'));
    }
    function reservationUpdate(Request $request){
        $reservation = Reservation::where('id', $request->id)->first();
        $reservation->status = $request->status;
        $reservation->save();
        return redirect()->back();
    }
}
