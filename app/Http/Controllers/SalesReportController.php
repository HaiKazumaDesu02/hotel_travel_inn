<?php

namespace App\Http\Controllers;

use App\Models\Bills;
use App\Models\Expense;
use App\Models\Occupants;
use App\Models\Sale;
use App\Models\SalesReport;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
{
    $billDates = Bills::pluck('created_at')->unique();
    $expenseDates = Expense::pluck('created_at')->unique();
    
    // Merge and sort the dates
    $dates = $billDates->merge($expenseDates)->sort();
    
    // Initialize an array to store the results
    $results = [];
    
    $searchedDate = $request->input('revenue_date');
    
    // Start a database transaction
    DB::beginTransaction();
    
    try {
        foreach ($dates as $date) {
            $targetDate = Carbon::parse($date)->format('Y-m-d');
    
            // Check if the current date matches the searched date
            if ($searchedDate && $searchedDate != $targetDate) {
                continue; // Skip to the next iteration if the date doesn't match
            }
    
            // Retrieve bills for the target date
            $bills = Bills::whereDate('created_at', $targetDate)->get();
    
            // Retrieve expenses for the target date
            $expenses = Expense::whereDate('created_at', $targetDate)->get();
    
            // Calculate total income from paid bills
            $totalIncome = $bills->where('status', 'paid')->sum(function ($bill) {
                return $bill->updated_at ? $bill->total : 0;
            });
    
            // Retrieve occupants with advance payments for the target date
            $occupants = Occupants::whereDate('check_in', $targetDate)->get();
    
            // Add advance payments to total income
            $totalIncome += $occupants->sum('advance_payment');
    
            // Calculate total expenses
            $totalExpenses = $expenses->sum('total');
    
            // Calculate profit or loss
            $profitOrLoss = $totalIncome - $totalExpenses;
    
            // Check if a result already exists for the target date
            $existingResult = collect($results)->firstWhere('date', $targetDate);
    
            $sale = Sale::where('date', $targetDate)->first();
    
            if ($sale) {
                // Update the existing sales record
                $sale->income = $totalIncome;
                $sale->expenses = $totalExpenses;
                $sale->profit_loss = $profitOrLoss;
                $sale->save();
            } else {
                // Create a new sales record for the current date
                $sale = Sale::create([
                    'date' => $targetDate,
                    'income' => $totalIncome,
                    'expenses' => $totalExpenses,
                    'profit_loss' => $profitOrLoss,
                ]);
            }
    
            if ($existingResult) {
                // Update the existing result with the new data
                $existingResult['totalIncome'] += $totalIncome;
                $existingResult['totalExpenses'] += $totalExpenses;
                $existingResult['profitOrLoss'] += $profitOrLoss;
            } else {
                // Store a new result for the target date
                $results[] = [
                    'date' => $targetDate,
                    'totalIncome' => $totalIncome,
                    'totalExpenses' => $totalExpenses,
                    'profitOrLoss' => $profitOrLoss,
                ];
            }
        }
        
        // Commit the database transaction
        DB::commit();
        
        $values = Sale::paginate(10);
        $from = null;
        $to = null;
        // Return the view with the results
        return view('sales.index', compact('values', 'from', 'to'));
    } catch (\Exception $e) {
        // Rollback the transaction if an exception occurs
        DB::rollBack();
    }
}
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SalesReport $salesReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SalesReport $salesReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SalesReport $salesReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SalesReport $salesReport)
    {
        //
    }
}
