<?php

namespace App\Http\Controllers;

use App\Models\Bills;
use App\Models\Occupants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EntryController extends Controller
{
    public function entry(){
        return view('entry-form');
    }
    public function store(Request $request){
        $data = $request->all();
        $occupant = Occupants::create($data);
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

        $bills = Bills::create([
            'occupant_id'=>$occupant->id,
            'room_id'=>$request->room_number,
        ]);
        return redirect()->back();

    }
}
