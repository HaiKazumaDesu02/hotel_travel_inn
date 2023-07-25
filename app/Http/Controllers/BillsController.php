<?php

namespace App\Http\Controllers;

use App\Models\Bills;
use App\Models\Expense;
use Illuminate\Http\Request;

class BillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = null;
        // return Expense::all();
        $bills = Bills::where('status','unpaid')->paginate(15);
        return view('bills.index', compact('bills', 'status'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bills $bills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bills $bills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request, Bills $bills)
    {
        // return $request->all();
        $bill = Bills::where('id', $id)->first();
        $bill->status = $request->status;
        $bill->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bills $bills)
    {
        //
    }
}
