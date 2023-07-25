<?php

namespace App\Http\Controllers;

use App\Models\Occupants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class OccupantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $occupants = Occupants::paginate(10);
        return view('occupants.index', compact('occupants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return 'oki';
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
    public function show(Occupants $occupants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id,Occupants $occupants)
    {
        // return $id;
        $occupant = Occupants::where('id', $id)->first();
        return view('occupants.edit', compact('occupant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request, Occupants $occupants)
    {
        
        $occupant = Occupants::where('id', $id)->first();

      
    
        $occupant->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'total_guests'=>$request->total_guests,
            'check_in'=>$request->check_in,
            'check_out'=>$request->check_out,
            'advance_payment'=>$request->advance_payment,
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $filename . '.' . $extension;
            $filePath = 'build/assets/second/guests/';
    
            // If the previous image exists, delete it
            if ($occupant->image_url && File::exists(public_path($filePath . $occupant->image_url))) {
                File::delete(public_path($filePath . $occupant->image_url));
            }
    
            $file->move(public_path($filePath), $filename);
            $occupant->image_url = $filename;
        }
        else {
            // No file uploaded, so retain the existing image_url
            $filename = $occupant->image_url;
        }
        $occupant->save();
        
        // $occupants = Occupants::paginate(10);
        return redirect('/occupants');
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Occupants $occupants)
    {
        //
    }
    
}
