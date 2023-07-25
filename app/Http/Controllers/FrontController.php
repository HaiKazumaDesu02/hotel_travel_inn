<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\CoupleBed;
use App\Models\DeluxeCoupleBed;
use App\Models\Gallery;
use App\Models\LandingPhoto;
use App\Models\Owner;
use App\Models\Rate;
use App\Models\Review;
use App\Models\Statistic;
use App\Models\Youtube;
use App\Models\TripleBed;
use App\Models\TwinBed;

class FrontController extends Controller
{
    function home(){
        $statistics = Statistic::all();
        $rates = Rate::all();
        $landings = LandingPhoto::all();
        $coupleBeds = CoupleBed::all();
        $twinBeds = TwinBed::all();
        $tripleBeds = TripleBed::all();
        $deluxeCoupleBeds = DeluxeCoupleBed::all();
        $reviews = Review::whereNotIn('id', [1, 2])
        ->get();
        $two_reviews = Review::whereIn('id', [1, 2])->get();
        $galleries = Gallery::all();
        $owner = Owner::all();
        $youtube = Youtube::all();
        $booking = Booking::all();


        return view('front.second', compact('landings','coupleBeds', 'tripleBeds', 'deluxeCoupleBeds', 'twinBeds', 'rates', 'statistics', 'reviews', 'two_reviews', 'owner', 'youtube', 'booking', 'galleries'));
    }
}
