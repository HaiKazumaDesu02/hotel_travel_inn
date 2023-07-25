<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Booking;
use App\Models\CoupleBed;
use App\Models\DeluxeCoupleBed;
use App\Models\LandingPhoto;
use App\Models\Occupants;
use App\Models\Owner;
use App\Models\Rate;
use App\Models\Review;
use App\Models\Rooms;
use App\Models\Statistic;
use App\Models\TripleBed;
use App\Models\TwinBed;
use App\Models\Youtube;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'Amir',
            'email' => 'amir.rai.pokhara@gmail.com',
            'password' => Hash::make('Pokhara_123'),
        ]);

        Rooms::create([
            'id'=>'101',
            'room_number'=>'101',
            'room_type'=>'Couple Bed',
            'occupancy' => '2',
            'price'=>'1500',
            'floor'=>'First',
            'image_url' => 'coupleBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'102',
            'room_number'=>'102',
            'room_type'=>'Triple Bed',
            'occupancy' => '3',
            'price'=>'1800',
            'floor'=>'Second',
            'image_url' => 'coupleBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'103',
            'room_number'=>'103',
            'room_type'=>'Couple Bed',
            'occupancy' => '2',
            'price'=>'1600',
            'floor'=>'Second',
            'image_url' => 'coupleBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'104',
            'room_number'=>'104',
            'room_type'=>'Couple Bed',
            'occupancy' => '3',
            'price'=>'1600',
            'floor'=>'Second',
            'image_url' => 'coupleBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'105',
            'room_number'=>'105',
            'room_type'=>'Couple Bed | Single bed',
            'occupancy' => '3',
            'price'=>'1800',
            'floor'=>'Second',
            'image_url' => 'coupleBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'106',
            'room_number'=>'106',
            'room_type'=>'Single Bed',
            'occupancy' => '1',
            'price'=>'1500',
            'floor'=>'Second',
            'image_url' => 'coupleBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'107',
            'room_number'=>'107',
            'room_type'=>'Couple Bed | Bath Tub',
            'occupancy' => '2',
            'price'=>'1800',
            'floor'=>'Second',
            'image_url' => 'coupleBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'108',
            'room_number'=>'108',
            'room_type'=>'Twin Bed',
            'occupancy' => '2',
            'price'=>'1500',
            'floor'=>'Third',
            'image_url' => 'twinBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'109',
            'room_number'=>'109',
            'room_type'=>'Twin Bed',
            'occupancy' => '2',
            'price'=>'1500',
            'floor'=>'Third',
            'image_url' => 'twinBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'110',
            'room_number'=>'110',
            'room_type'=>'Twin Bed',
            'occupancy' => '2',
            'price'=>'1500',
            'floor'=>'Third',
            'image_url' => 'twinBed.jpg', 
        ]);

        Rooms::create([
            'id'=>'111',
            'room_number'=>'111',
            'room_type'=>'Couple Bed',
            'occupancy' => '2',
            'price'=>'1500',
            'floor'=>'Third',
            'image_url' => 'coupleBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'112',
            'room_number'=>'112',
            'room_type'=>'Couple Bed',
            'occupancy' => '2',
            'price'=>'1500',
            'floor'=>'Third',
            'image_url' => 'coupleBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'114',
            'room_number'=>'114',
            'room_type'=>'Couple Bed | AC | Bath Tub',
            'occupancy' => '2',
            'price'=>'1500',
            'floor'=>'Third',
            'image_url' => 'coupleBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'115',
            'room_number'=>'115',
            'room_type'=>'Couple Bed | AC',
            'occupancy' => '2',
            'price'=>'1500',
            'floor'=>'Fourth',
            'image_url' => 'deluxeBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'116',
            'room_number'=>'116',
            'room_type'=>'Couple Bed | AC',
            'occupancy' => '2',
            'price'=>'2500',
            'floor'=>'Fourth',
            'image_url' => 'deluxeBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'118',
            'room_number'=>'118',
            'room_type'=>'Couple Bed | AC',
            'occupancy' => '2',
            'price'=>'2500',
            'floor'=>'Fourth',
            'image_url' => 'deluxeBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'119',
            'room_number'=>'119',
            'room_type'=>'Couple Bed | Single bed | AC',
            'occupancy' => '3',
            'price'=>'2500',
            'floor'=>'Fourth',
            'image_url' => 'deluxeBed.jpg', 
        ]);
        Rooms::create([
            'id'=>'120',
            'room_number'=>'120',
            'room_type'=>'Couple Bed | AC | Bath Tub',
            'occupancy' => '2',
            'price'=>'2500',
            'floor'=>'Fourth',
            'image_url' => 'deluxeBed.jpg', 
        ]);
       
        Rate::create([
            'id' => '1',
            'room_type' => 'Couple Bed',
            'rate' => '1500',
        ]);
        Rate::create([
            'id' => '2',
            'room_type' => 'Twin Bed',
            'rate' => '1500',
        ]);
        Rate::create([
            'id' => '3',
            'room_type' => 'Triple Bed',
            'rate' => '1800',
        ]);
        Rate::create([
            'id' => '4',
            'room_type' => 'Deluxe Couple Bed',
            'rate' => '2300',
        ]);
        Statistic::create([
            'id' => '1',
            'name' => 'Five Star Ratings',
            'number' => '87',
        ]);
        Statistic::create([
            'id' => '2',
            'name' => 'International guests',
            'number' => '589',
        ]);
        Statistic::create([
            'id' => '3',
            'name' => 'Served Breakfast',
            'number' => '46',
        ]);
        Statistic::create([
            'id' => '4',
            'name' => 'New Friendships',
            'number' => '458',
        ]);

        LandingPhoto::create([
            'id' => '1',
            'name' => 'photo1',
            'image_url' => 'b.jpg',
        ]);
        LandingPhoto::create([
            'id' => '2',
            'name' => 'photo2',
            'image_url' => 'a.jpg',
        ]);

        CoupleBed::create([
            'id' => '1',
            'name' => 'photo2',
            'image_url' => 'coupleBed.jpg',
        ]);
        // CoupleBed::create([
        //     'id' => '2',
        //     'name' => 'photo2',
        //     'image_url' => 'coupleBed.jpg',
        // ]);
        TwinBed::create([
            'id' => '1',
            'name' => 'photo2',
            'image_url' => 'twinBed.jpg',
        ]);
        TwinBed::create([
            'id' => '2',
            'name' => 'photo2',
            'image_url' => 'twinBed1.jpg',
        ]);
        TwinBed::create([
            'id' => '3',
            'name' => 'photo2',
            'image_url' => 'twinBed3.jpg',
        ]);
        TripleBed::create([
            'id' => '1',
            'name' => 'photo2',
            'image_url' => 'twinBed3.jpg',
        ]);
        DeluxeCoupleBed::create([
            'id' => '1',
            'name' => 'photo2',
            'image_url' => 'deluxe.jpg',
        ]);
        DeluxeCoupleBed::create([
            'id' => '2',
            'name' => 'photo2',
            'image_url' => 'deluxe1.jpg',
        ]);
        DeluxeCoupleBed::create([
            'id' => '3',
            'name' => 'photo2',
            'image_url' => 'deluxe2.jpg',
        ]);
        DeluxeCoupleBed::create([
            'id' => '4',
            'name' => 'photo2',
            'image_url' => 'deluxe3.jpg',
        ]);
        DeluxeCoupleBed::create([
            'id' => '5',
            'name' => 'photo2',
            'image_url' => 'deluxe4.jpg',
        ]);
        DeluxeCoupleBed::create([
            'id' => '6',
            'name' => 'photo2',
            'image_url' => 'deluxe5.jpg',
        ]);

        Review::create([
            'id' => 1,
            'name' => 'amir',
            'city' => 'pokhara',
            'country' => 'nepal',
            'title' => 'Great',
            'image_url' => 'review-person3.jpg',
            'review' => 'Stayed here for a week and found it to be a perfect base. A quick taxi ride to the beaches at Camps bay. A walk to the town centre and nightlife. A short stroll to local square for dinner. We went cycling each day, so it was ideal spot for a pick to get to ride Tokai, Table mountain and Blouberg.'
        ]);
        Review::create([
            'id' => 2,
            'name' => 'amir',
            'city' => 'pokhara',
            'country' => 'nepal',
            'title' => 'Great',
            'image_url' => 'review-person3.jpg',
            'review' => 'Stayed here for a week and found it to be a perfect base. A quick taxi ride to the beaches at Camps bay. A walk to the town centre and nightlife. A short stroll to local square for dinner. We went cycling each day, so it was ideal spot for a pick to get to ride Tokai, Table mountain and Blouberg.'
        ]);
        Review::create([
            'id' => 3,
            'name' => 'amir',
            'city' => 'pokhara',
            'country' => 'nepal',
            'title' => 'Great',
            'image_url' => 'review-person3.jpg',
            'review' => 'Stayed here for a week and found it to be a perfect base. A quick taxi ride to the beaches at Camps bay. A walk to the town centre and nightlife. A short stroll to local square for dinner. We went cycling each day, so it was ideal spot for a pick to get to ride Tokai, Table mountain and Blouberg.'
        ]);
        Review::create([
            'id' => 4,
            'name' => 'amir',
            'city' => 'pokhara',
            'country' => 'nepal',
            'title' => 'Great',
            'image_url' => 'review-person3.jpg',
            'review' => 'Stayed here for a week and found it to be a perfect base. A quick taxi ride to the beaches at Camps bay. A walk to the town centre and nightlife. A short stroll to local square for dinner. We went cycling each day, so it was ideal spot for a pick to get to ride Tokai, Table mountain and Blouberg.'
        ]);
        Review::create([
            'id' => 5,
            'name' => 'amir',
            'city' => 'pokhara',
            'country' => 'nepal',
            'title' => 'Great',
            'image_url' => 'review-person3.jpg',
            'review' => 'Stayed here for a week and found it to be a perfect base. A quick taxi ride to the beaches at Camps bay. A walk to the town centre and nightlife. A short stroll to local square for dinner. We went cycling each day, so it was ideal spot for a pick to get to ride Tokai, Table mountain and Blouberg.'
        ]);

        Owner::create([
            'id' => 1,
            'name' => 'Managind Director',
            'image_url' => 'dad.jpg',
            'description' => "Introducing Arjun Kumar Rai, the Managing Director of Hotel Travel Inn. With a prestigious background in the hospitality industry and over 20 years of trekking guide experience, Arjun brings a unique blend of expertise to our establishment. Experience the perfect fusion of exceptional hospitality and thrilling adventures under Arjun's guidance. Immerse yourself in our humble accommodations, impeccable service, and unforgettable trekking journeys. Welcome to Hotel Travel Inn, where Arjun Kumar Rai leads the way to extraordinary experiences.",
        ]);

        Youtube::create([
            'id' => 1,
            'name' => 'bato',
        ]);
        Booking::create([
            'id' => 1,
            'name' => 'Arjun Kumar Rai',
            'phone' => '+977 9804132433',
            'image_url' => 'dad.jpg',
        ]);

        // Occupants::create([
        //     'name'=>'amr',
        //     'email'=>'amr',
        //     'phone'=>'222',
        //     'total_guests'=>'1',
        //     'check_in'=>'2022-01-01',
        //     'check_out'=>'2022-01-01',
        //     'advance_payment'=>'222',
        // ]);
       

        
    }
}
