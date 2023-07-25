<?php

namespace App\Http\Controllers;

use App\Models\Bills;
use App\Models\Expense;
use App\Models\Occupants;
use App\Models\Reservation;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function guestSearch(Request $request)
    {
        $searchTerm = $request->input('guest_search'); // Assuming the search term is passed as 'guest_search' in the request

        $query = Occupants::where(function($query) use ($searchTerm) {
            $query->where('name', 'like', '%' . $searchTerm . '%')
                ->orWhere('email', 'like', '%' . $searchTerm . '%')
                ->orWhere('phone', 'like', '%' . $searchTerm . '%')
                ->orWhere('check_in', 'like', '%' . $searchTerm . '%');
        });

        $occupants = $query->paginate(100);

        return view('occupants.index', compact('occupants'));
    }


    public function billSearch(Request $request)
    {
        $searchQuery = $request->input('bill_search');
        $status = $request->input('status');
    
        $query = Bills::query();
    
        if ($searchQuery) {
            $query->where(function ($subQuery) use ($searchQuery) {
                $subQuery->whereHas('occupant', function ($occupantQuery) use ($searchQuery) {
                    $occupantQuery->where('name', 'LIKE', '%' . $searchQuery . '%');
                })
                ->orWhere('status', 'LIKE', '%' . $searchQuery . '%');
            });
        }
    
        if ($status) {
            $query->where('status', $status);
        }
    
        $bills = $query->paginate(100);
    
        return view('bills.index', compact('bills', 'status'));
    }

    public function revenueSearch(Request $request)
    {
        $from = $request->from;
        $to = $request->to;
        
        if ($from && $to) {
            // Retrieve data for the specified date range
             $values = Sale::whereBetween('date', [$from, $to])->get();
            //  return $results = $values->sum('expenses');
             $results[] = [
                'date' => $from .' '."||".' '. $to,
                'totalIncome' => $values->sum('income'),
                'totalExpenses' => $values->sum('expenses'),
                'profitOrLoss' => $values->sum('profit_loss'),
            ];
            
        } elseif ($from) {
            // Retrieve data for the specific date
            $values = Sale::where('date', $from)->get();
            $results = null;
        } else {
            return redirect()->route('sales-index');
        }
        return view('sales.index', compact('values', 'from', 'to', 'results'));
        
        // Process and return the retrieved data
        // ...
    }
  
    public function searchReservations(Request $request){
        // $reservations = Reservation::where('first_name', $request->reservation_search)->first();
        $reservationSearch = $request->input('reservation_search');
        $status = $request->input('status');

        // Perform your search logic based on the inputs
        $query = Reservation::query();

        if (!empty($reservationSearch)) {
            // Use 'LIKE' with wildcards % to perform a partial search
            $query->where('first_name', 'LIKE', '%' . $reservationSearch . '%');
        }

        if (!empty($status)) {
            // Add a WHERE clause to filter by status if provided
            $query->where('status', $status);
        }

        // Get the search results
        $reservations = $query->paginate(10);
        return view('reservations.index', compact('reservations', 'status'));
    }


    
    

    
    
}
