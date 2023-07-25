<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\CoupleBed;
use App\Models\DeluxeCoupleBed;
use App\Models\LandingPhoto;
use App\Models\Owner;
use App\Models\Rate;
use App\Models\Review;
use \App\Models\Statistic;
use App\Models\TripleBed;
use App\Models\TwinBed;
use App\Models\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;


class WebsiteController extends Controller
{

    public function website(Request $request)
    {
        $rates = Rate::all();
        $statistics = Statistic::all();
        $landings = LandingPhoto::all();
        $coupleBeds = CoupleBed::all();
        $twinBeds = TwinBed::all();
        $tripleBeds = TripleBed::all();
        $deluxeCoupleBeds = DeluxeCoupleBed::all();
        $status = session('status', 'photo'); 
        $deluxeCoupleBeds = DeluxeCoupleBed::all();
        $reviews = Review::all();
        $owners = Owner::all();
        $youtube = Youtube::all();
        $bookings = Booking::all();

        return view('websites.website', compact('rates', 'statistics', 'landings', 'status', 'coupleBeds', 'tripleBeds', 'deluxeCoupleBeds', 'twinBeds', 'reviews', 'owners', 'youtube', 'bookings'));
    }
    
    
    public function changeRate(Request $request){
        $rate = Rate::where('id', $request->id)->first();
        $rate->room_type = $request->room_type;
        $rate->rate = $request->rate;
        $rate->save();
        return redirect()->back();
    }
    public function changeStatistics(Request $request)
    {
        $statistic = Statistic::where('id', $request->id)->first();
        if ($request->name) {
            $statistic->name = $request->name;
        }
        $statistic->number = $request->number;
        $statistic->save();

        $status = session('status', 'statistic'); 
        return redirect()->back()->with('status', $status);

    }
    public function changeLanding(Request $request)
    {
        $landing = LandingPhoto::where('id', $request->id)->first();
        
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $filename . '.' . $extension;
            $filePath = 'build/assets/second/img/my_img/';
    
            // If the previous image exists, delete it
            if ($landing->image_url && File::exists(public_path($filePath . $landing->image_url))) {
                File::delete(public_path($filePath . $landing->image_url));
            }
    
            $file->move(public_path($filePath), $filename);
            $landing->image_url = $filename;
        }
        else {
            // No file uploaded, so retain the existing image_url
            $filename = $landing->image_url;
        }
    
        $landing->save();
        
        $status = session('status', 'photo'); 
    
        // Return a response or redirect as needed
        return redirect()->back()->with('status', $status);
    }
    

    function changeCoupleBed(Request $request)
    {
        $coupleBed = CoupleBed::where('id', $request->id)->first();
        
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $filename . '.' . $extension;
            $filePath = 'build/assets/second/img/my_img/couple_beds/';

            // If the previous image exists, delete it
            if ($coupleBed->image_url && File::exists(public_path($filePath . $coupleBed->image_url))) {
                File::delete(public_path($filePath . $coupleBed->image_url));
            }

            $file->move(public_path($filePath), $filename);
            $coupleBed->image_url = $filename;
        }
        else {
            // No file uploaded, so retain the existing image_url
            $filename = $coupleBed->image_url;
        }

        $coupleBed->save();
        
        $status = session('status', 'coupleBed'); 

        // Return a response or redirect as needed
        return redirect()->back()->with('status', $status);
    }

    function changeTwinBed(Request $request)
    {
        $twinBed = TwinBed::where('id', $request->id)->first();
        
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $filename . '.' . $extension;
            $filePath = 'build/assets/second/img/my_img/Twin Bed/';
    
            // If the previous image exists, delete it
            if ($twinBed->image_url && File::exists(public_path($filePath . $twinBed->image_url))) {
                File::delete(public_path($filePath . $twinBed->image_url));
            }
    
            $file->move(public_path($filePath), $filename);
            $twinBed->image_url = $filename;
        }
        else {
            // No file uploaded, so retain the existing image_url
            $filename = $twinBed->image_url;
        }
    
        $twinBed->save();
        
        $status = session('status', 'twinBed'); 
    
        // Return a response or redirect as needed
        return redirect()->back()->with('status', $status);
    }
    
    function changeTripleBed(Request $request)
    {
        $tripleBed = TripleBed::where('id', $request->id)->first();
        
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $filename . '.' . $extension;
            $filePath = 'build/assets/second/img/my_img/Triple Bed/';
    
            // If the previous image exists, delete it
            if ($tripleBed->image_url && File::exists(public_path($filePath . $tripleBed->image_url))) {
                File::delete(public_path($filePath . $tripleBed->image_url));
            }
    
            $file->move(public_path($filePath), $filename);
            $tripleBed->image_url = $filename;
        }
        else {
            // No file uploaded, so retain the existing image_url
            $filename = $tripleBed->image_url;
        }
    
        $tripleBed->save();
        
        $status = session('status', 'tripleBed'); 
    
        // Return a response or redirect as needed
        return redirect()->back()->with('status', $status);
    }
    function changeDeluxeCoupleBed(Request $request)
    {
        $deluxeCoupleBed = DeluxeCoupleBed::where('id', $request->id)->first();
        
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $filename . '.' . $extension;
            $filePath = 'build/assets/second/img/my_img/Deluxe Couple Bed/';
    
            // If the previous image exists, delete it
            if ($deluxeCoupleBed->image_url && File::exists(public_path($filePath . $deluxeCoupleBed->image_url))) {
                File::delete(public_path($filePath . $deluxeCoupleBed->image_url));
            }
    
            $file->move(public_path($filePath), $filename);
            $deluxeCoupleBed->image_url = $filename;
        }
        else {
            // No file uploaded, so retain the existing image_url
            $filename = $deluxeCoupleBed->image_url;
        }
    
        $deluxeCoupleBed->save();
        
        $status = session('status', 'deluxeCoupleBed'); 
    
        // Return a response or redirect as needed
        return redirect()->back()->with('status', $status);
    }


    public function addReview(Request $request){
        $review = Review::create([
            'name' => $request->name,
            'city' => $request->city,
            'country' => $request->country,
            'title' => $request->title,
            'review' => $request->review,
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $filename . '.' . $extension;
            $filePath = 'build/assets/second/img/my_img/reviewers/';
    
            // If the previous image exists, delete it
            if ($review->image_url && File::exists(public_path($filePath . $review->image_url))) {
                File::delete(public_path($filePath . $review->image_url));
            }
    
            $file->move(public_path($filePath), $filename);
            $review->image_url = $filename;
        }
        else {
            // No file uploaded, so retain the existing image_url
            $filename = $review->image_url;
        }
    
        $review->save();

        $status = session('status', 'review'); 
        return redirect()->back()->with('status', $status);
        
    }
    public function changeReview(Request $request){
        $review = Review::where('id', $request->id)->first();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $filename . '.' . $extension;
            $filePath = 'build/assets/second/img/my_img/reviewers/';
    
            // If the previous image exists, delete it
            if ($review->image_url && File::exists(public_path($filePath . $review->image_url))) {
                File::delete(public_path($filePath . $review->image_url));
            }
    
            $file->move(public_path($filePath), $filename);
            $review->image_url = $filename;
        }
        else {
            // No file uploaded, so retain the existing image_url
            $filename = $review->image_url;
        }
        $review->name = $request->name;
        $review->city = $request->city;
        $review->country = $request->country;
        $review->title = $request->title;
        $review->review = $request->review;
        $review->save();
        $status = session('status', 'review'); 
        return redirect()->back()->with('status', $status);
    }
    public function changeOwner(Request $request){
        $owner = Owner::where('id', $request->id)->first();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $filename . '.' . $extension;
            $filePath = 'build/assets/second/img/my_img/owner/';
    
            // If the previous image exists, delete it
            if ($owner->image_url && File::exists(public_path($filePath . $owner->image_url))) {
                File::delete(public_path($filePath . $owner->image_url));
            }
    
            $file->move(public_path($filePath), $filename);
            $owner->image_url = $filename;
        }
        else {
            // No file uploaded, so retain the existing image_url
            $filename = $owner->image_url;
        }
        $owner->name = $request->name;
        $owner->description = $request->description;
        $owner->save();
        $status = session('status', 'photo'); 
        return redirect()->back()->with('status', $status);
    }
    
  
    function changeYoutube(Request $request){
        $youtube = Youtube::where('id', $request->id)->first();
        $youtube->name = $request->name;
        $youtube->link = $request->link;
        $youtube->save();
        return redirect()->back();
    }
    function changeBooking(Request $request){
        $booking = Booking::where('id', $request->id)->first();
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $filename = $filename . '.' . $extension;
            $filePath = 'build/assets/second/img/my_img/owner/';
    
            // If the previous image exists, delete it
            if ($booking->image_url && File::exists(public_path($filePath . $booking->image_url))) {
                File::delete(public_path($filePath . $booking->image_url));
            }
    
            $file->move(public_path($filePath), $filename);
            $booking->image_url = $filename;
        }
        else {
            // No file uploaded, so retain the existing image_url
            $filename = $booking->image_url;
        }
        $booking->name = $request->name;
        $booking->phone = $request->phone;
        $booking->save();
        return redirect()->back();
    }

}
