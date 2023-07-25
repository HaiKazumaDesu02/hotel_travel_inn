<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::paginate(10);
        return view('gallery.index', compact('galleries'));
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
        $gallery = Gallery::create([
            'first_word' => $request->first_word,
            'second_word' => $request->second_word,
            'data_type' => $request->data_type,
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $filename . '.' . $extension;
            $filePath = 'build/assets/second/gallery/';
    
            // If the previous image exists, delete it
            if ($gallery->image_url && File::exists(public_path($filePath . $gallery->image_url))) {
                File::delete(public_path($filePath . $gallery->image_url));
            }
    
            $file->move(public_path($filePath), $filename);
            $gallery->image_url = $filename;
        }
        else {
            // No file uploaded, so retain the existing image_url
            $filename = $gallery->image_url;
        }
        $gallery->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $gallery = Gallery::where('id', $request->id)->first();
        $gallery->first_word = $request->first_word;
        $gallery->second_word = $request->second_word;
        $gallery->data_type = $request->data_type;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $filename . '.' . $extension;
            $filePath = 'build/assets/second/gallery/';
    
            // If the previous image exists, delete it
            if ($gallery->image_url && File::exists(public_path($filePath . $gallery->image_url))) {
                File::delete(public_path($filePath . $gallery->image_url));
            }
    
            $file->move(public_path($filePath), $filename);
            $gallery->image_url = $filename;
        }
        else {
            // No file uploaded, so retain the existing image_url
            $filename = $gallery->image_url;
        }
        $gallery->save();
        return redirect()->back();

    }   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
