<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Rooms::paginate(10);
        return view('rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Rooms::create($data);
        $rooms = Rooms::paginate(10);
        return view('rooms.index', compact('rooms'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Rooms $rooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id,Rooms $rooms)
    {
        $room = Rooms::where('id', $id)->first();

        // return 'oki';
        return view('rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request, Rooms $rooms)
    {
        $room = Rooms::where('id', $id)->first();
        $room->update($request->all());
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $filename . '.' . $extension;
            $filePath = 'build/assets/second/rooms/';
    
            // If the previous image exists, delete it
            if ($room->image_url && File::exists(public_path($filePath . $room->image_url))) {
                File::delete(public_path($filePath . $room->image_url));
            }
    
            $file->move(public_path($filePath), $filename);
            $room->image_url = $filename;
        }
        else {
            // No file uploaded, so retain the existing image_url
            $filename = $room->image_url;
        }
        $room->save();
        // $rooms = Rooms::paginate(10);
        return redirect('/rooms');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rooms $rooms)
    {
        //
    }

    public function roomStatus(Request $request){
        $room = Rooms::where('id', $request->id)->first();
        $room->status = $request->status;
        $room->save();
        return redirect()->back();

    }
}
