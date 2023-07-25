<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    function store(Request $request){
        $supplier = Supplier::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'description' => $request->description,
        ]);
        return redirect()->back();
    }
    function edit(Request $request){
        $supplier = Supplier::where('id', $request->id)->first();
        $supplier->name = $request->name;
        $supplier->phone = $request->phone;
        $supplier->description = $request->description;
        $supplier->save();
        return redirect()->back();

    }
    function destroy($id){
        $supplier = Supplier::where('id', $id)->first()->delete();
        return redirect()->back();

    }
}
