<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-12 pb-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="pt-3 text-gray-900 dark:text-gray-100">

                    <div class="row">
                        <div class="col-sm-6 col-md-3 mb-3 d-flex justify-content-start flex-column align-items-center">
                            <div class="d-flex justify-content-between align-items-center"
                                style="background-color:rgb(248,133,125); border-radius:11px; padding:20px; color:white;width:13rem">

                                <div>

                                    <p class="fw-bold" style="font-size:1.5rem">
                                        Rs. {{ $total_income }}
                                    </p>
                                    <p>
                                        Total Income
                                    </p>
                                </div>
                                <div>
                                    <i class="fas fa-money-bill-alt fa-2x"></i>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 d-flex justify-content-start flex-column align-items-center">
                            <div class="d-flex justify-content-between align-items-center"
                                style="background-color:rgb(248,133,125); border-radius:11px; padding:20px; color:white;width:13rem">

                                <div>

                                    <p class="fw-bold" style="font-size:1.5rem">
                                        Rs. {{ $total_expense }}
                                    </p>
                                    <p>
                                        Expenses
                                    </p>
                                </div>
                                <div>
                                    <i class="fas fa-money-bill-wave fa-2x"></i>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 d-flex justify-content-start flex-column align-items-center">
                            <div class="d-flex justify-content-between align-items-center"
                                style="background-color:rgb(248,133,125); border-radius:11px; padding:20px; color:white;width:13rem">

                                <div>

                                    <p class="fw-bold" style="font-size:1.5rem">
                                        {{ $guests }}
                                    </p>
                                    <p>
                                        New Guests
                                    </p>
                                </div>
                                <div>
                                    <i class="fa-solid fa-user-group fa-2x"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3 d-flex justify-content-start flex-column align-items-center">
                            <div class="d-flex justify-content-between align-items-center"
                                style="background-color:rgb(248,133,125); border-radius:11px; padding:20px; color:white;width:13rem">

                                <div>

                                    <p class="fw-bold" style="font-size:1.5rem">
                                        16
                                    </p>
                                    <p>
                                        Rooms
                                    </p>
                                </div>
                                <div>
                                    <i class="fa-solid fa-key fa-2x"></i>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                                    aria-selected="true">All Status</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-available-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-available" type="button" role="tab"
                                    aria-controls="pills-available" aria-selected="false">Available</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-occupied-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-occupied" type="button" role="tab"
                                    aria-controls="pills-occupied" aria-selected="false">Occupied</button>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-booked-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-booked" type="button" role="tab"
                                    aria-controls="pills-booked" aria-selected="false">Booked</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-reserved-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-reserved" type="button" role="tab"
                                    aria-controls="pills-reserved" aria-selected="false">Reserved</button>
                            </li>

                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-check-out-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-check-out" type="button" role="tab"
                                    aria-controls="pills-check-out" aria-selected="false">Checked Out</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-under-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-under" type="button" role="tab"
                                    aria-controls="pills-under" aria-selected="false">Under Maintainance</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">

                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach ($rooms as $room)
                                            @php
                                                $status = $room->status;
                                                $color = '';
                                                
                                                switch ($status) {
                                                    case 'Available':
                                                        $color = 'rgb(120,214,157)'; // Green
                                                        break;
                                                    case 'Reserved':
                                                        $color = 'rgb(255, 215, 0)'; // Yellow
                                                        break;
                                                    case 'Occupied':
                                                        $color = 'rgb(255, 0, 51) '; // Red
                                                        break;
                                                    case 'Booked':
                                                        $color = 'rgb(30, 144, 255)'; // Blue
                                                        break;
                                                    case 'Checked_out':
                                                        $color = 'rgb(155, 48, 255)'; // Purple
                                                        break;
                                                    case 'Under_maintenance':
                                                        $color = 'black'; // Orange
                                                        break;
                                                }
                                            @endphp
                                            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                                <div class="card" style="border-radius: 11px;">
                                                    <img src="{{ $room->image_url ? asset('build/assets/second/rooms/' . $room->image_url) : asset('build/assets/second/gallery/tim-swaan-eOpewngf68w-unsplash.jpg') }}" alt="Room Image">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-4">
                                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                                <p class="card-text fw-bold" style="font-size:2rem">{{ $room->room_number }}</p>
                                                                <button type="button" class="btn-sm" style="background-color:{{ $color }}; color: white; border-radius:8px" data-toggle="modal" data-target="#roomStatus{{ $room->id }}">
                                                                    {{ $room->status }}
                                                                </button>
                                                            </div>
                                                        </h5>
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <p class="card-text">Floor</p>
                                                            <p class="card-text fw-bold">{{ $room->floor }}</p>
                                                        </div>
                                                        <hr>
                                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                                            <div class="d-flex flex-column">
                                                                <p class="card-text">Room Type</p>
                                                                <p class="card-text fw-bold">{{ $room->room_type }}</p>
                                                            </div>
                                                            <div class="d-flex flex-column align-items-center">
                                                                <i class="fa-solid fa-user"></i>
                                                                {{ $room->occupancy }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            
                            </div>
                            
                            <div class="tab-pane fade" id="pills-available" role="tabpanel" aria-labelledby="pills-available-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach ($rooms as $room)
                                            @if ($room->status == 'Available')
                                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                                    <div class="card" style="border-radius: 11px;">
                                                        <img src="{{ $room->image_url ? asset('build/assets/second/rooms/' . $room->image_url) : asset('build/assets/second/gallery/tim-swaan-eOpewngf68w-unsplash.jpg') }}" alt="Room Image">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                                    <p class="card-text fw-bold" style="font-size:2rem">{{ $room->room_number }}</p>
                                                                    <button type="button" class="btn-sm" style="background-color:rgb(120,214,157); color: white; border-radius:8px" data-toggle="modal" data-target="#roomStatus{{ $room->id }}">
                                                                        {{ $room->status }}
                                                                    </button>
                                                                </div>
                                                            </h5>
                                                            <div class="d-flex justify-content-between mb-2">
                                                                <p class="card-text">Floor</p>
                                                                <p class="card-text fw-bold">{{ $room->floor }}</p>
                                                            </div>
                                                            <hr>
                                                            <div class="d-flex justify-content-between my-2">
                                                                <p class="card-text">Room Type</p>
                                                                <p class="card-text">{{ $room->room_type }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="pills-booked" role="tabpanel" aria-labelledby="pills-booked-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach ($rooms as $room)
                                            @if ($room->status == 'Booked')
                                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                                    <div class="card" style="border-radius: 11px;">
                                                        <img src="{{ $room->image_url ? asset('build/assets/second/rooms/' . $room->image_url) : asset('build/assets/second/gallery/tim-swaan-eOpewngf68w-unsplash.jpg') }}" alt="Room Image">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                                    <p class="card-text fw-bold" style="font-size:2rem">{{ $room->room_number }}</p>
                                                                    <button type="button" class="btn-sm" style="background-color:rgb(30, 144, 255); color: white; border-radius:8px" data-toggle="modal" data-target="#roomStatus{{ $room->id }}">
                                                                        {{ $room->status }}
                                                                    </button>
                                                                </div>
                                                            </h5>
                                                            <div class="d-flex justify-content-between mb-2">
                                                                <p class="card-text">Floor</p>
                                                                <p class="card-text fw-bold">{{ $room->floor }}</p>
                                                            </div>
                                                            <hr>
                                                            <div class="d-flex justify-content-between my-2">
                                                                <p class="card-text">Room Type</p>
                                                                <p class="card-text">{{ $room->room_type }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            


                            <div class="tab-pane fade" id="pills-reserved" role="tabpanel" aria-labelledby="pills-reserved-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach ($rooms as $room)
                                            @if ($room->status == 'Reserved')
                                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                                    <div class="card" style="border-radius: 11px;">
                                                        <img src="{{ $room->image_url ? asset('build/assets/second/rooms/' . $room->image_url) : asset('build/assets/second/gallery/tim-swaan-eOpewngf68w-unsplash.jpg') }}" alt="Room Image">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                                    <p class="card-text fw-bold" style="font-size:2rem">{{ $room->room_number }}</p>
                                                                    <button type="button" class="btn-sm" style="background-color:rgb(255, 215, 0); color: white; border-radius:8px" data-toggle="modal" data-target="#roomStatus{{ $room->id }}">
                                                                        {{ $room->status }}
                                                                    </button>
                                                                </div>
                                                            </h5>
                                                            <div class="d-flex justify-content-between mb-2">
                                                                <p class="card-text">Floor</p>
                                                                <p class="card-text fw-bold">{{ $room->floor }}</p>
                                                            </div>
                                                            <hr>
                                                            <div class="d-flex justify-content-between my-2">
                                                                <p class="card-text">Room Type</p>
                                                                <p class="card-text">{{ $room->room_type }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            

                            <div class="tab-pane fade" id="pills-occupied" role="tabpanel" aria-labelledby="pills-occupied-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach ($rooms as $room)
                                            @if ($room->status == 'Occupied')
                                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                                    <div class="card" style="border-radius: 11px;">
                                                        <img src="{{ $room->image_url ? asset('build/assets/second/rooms/' . $room->image_url) : asset('build/assets/second/gallery/tim-swaan-eOpewngf68w-unsplash.jpg') }}" alt="Room Image">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                                    <p class="card-text fw-bold" style="font-size:2rem">{{ $room->room_number }}</p>
                                                                    <button type="button" class="btn-sm" style="background-color:rgb(255, 0, 51) ; color: white; border-radius:8px" data-toggle="modal" data-target="#roomStatus{{ $room->id }}">
                                                                        {{ $room->status }}
                                                                    </button>
                                                                </div>
                                                            </h5>
                                                            <div class="d-flex justify-content-between mb-2">
                                                                <p class="card-text">Floor</p>
                                                                <p class="card-text fw-bold">{{ $room->floor }}</p>
                                                            </div>
                                                            <hr>
                                                            <div class="d-flex justify-content-between my-2">
                                                                <p class="card-text">Room Type</p>
                                                                <p class="card-text">{{ $room->room_type }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            

                            <div class="tab-pane fade" id="pills-check-out" role="tabpanel" aria-labelledby="pills-check-out-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach ($rooms as $room)
                                            @if ($room->status == 'Checked_out')
                                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                                    <div class="card" style="border-radius: 11px;">
                                                        <img src="{{ $room->image_url ? asset('build/assets/second/rooms/' . $room->image_url) : asset('build/assets/second/gallery/tim-swaan-eOpewngf68w-unsplash.jpg') }}" alt="Room Image">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                                    <p class="card-text fw-bold" style="font-size:2rem">{{ $room->room_number }}</p>
                                                                    <button type="button" class="btn-sm" style="background-color:rgb(155, 48, 255); color: white; border-radius:8px" data-toggle="modal" data-target="#roomStatus{{ $room->id }}">
                                                                        {{ $room->status }}
                                                                    </button>
                                                                </div>
                                                            </h5>
                                                            <div class="d-flex justify-content-between mb-2">
                                                                <p class="card-text">Floor</p>
                                                                <p class="card-text fw-bold">{{ $room->floor }}</p>
                                                            </div>
                                                            <hr>
                                                            <div class="d-flex justify-content-between my-2">
                                                                <p class="card-text">Room Type</p>
                                                                <p class="card-text">{{ $room->room_type }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            

                            <div class="tab-pane fade" id="pills-under" role="tabpanel" aria-labelledby="pills-under-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach ($rooms as $room)
                                            @if ($room->status == 'Under_maintainance')
                                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                                    <div class="card" style="border-radius: 11px;">
                                                        <img src="{{ $room->image_url ? asset('build/assets/second/rooms/' . $room->image_url) : asset('build/assets/second/gallery/tim-swaan-eOpewngf68w-unsplash.jpg') }}" alt="Room Image">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-4">
                                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                                    <p class="card-text fw-bold" style="font-size:2rem">{{ $room->room_number }}</p>
                                                                    <button type="button" class="btn-sm" style="background-color:black; color: white; border-radius:8px" data-toggle="modal" data-target="#roomStatus{{ $room->id }}">
                                                                        {{ $room->status }}
                                                                    </button>
                                                                </div>
                                                            </h5>
                                                            <div class="d-flex justify-content-between mb-2">
                                                                <p class="card-text">Floor</p>
                                                                <p class="card-text fw-bold">{{ $room->floor }}</p>
                                                            </div>
                                                            <hr>
                                                            <div class="d-flex justify-content-between my-2">
                                                                <p class="card-text">Room Type</p>
                                                                <p class="card-text">{{ $room->room_type }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        @foreach ($rooms as $room)
                            <div class="modal fade" id="roomStatus{{ $room->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="roomStatusTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p class="modal-title" id="roomStatusLongTitle">Change Room Status</p>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('room-status') }}" method="post">
                                            @csrf
                                            <input type="text" name="id" value="{{ $room->id }}" hidden>
                                            <div class="modal-body">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="inlineRadio1" value="Available"
                                                        {{ $room->status == 'Available' ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="inlineRadio1">Available</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="inlineRadio2" value="Reserved"
                                                        {{ $room->status == 'Reserved' ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="inlineRadio1">Reserved</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="inlineRadio3" value="Occupied"
                                                        {{ $room->status == 'Occupied' ? 'checked' : '' }}>
                                                    <label class="form-check-label"
                                                        for="inlineRadio1">Occupied</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="inlineRadio4" value="Booked"
                                                        {{ $room->status == 'Booked' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">Booked</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="inlineRadio5" value="Checked_out"
                                                        {{ $room->status == 'Checked_out' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">Checked
                                                        out</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="inlineRadio5" value="Under_maintainance"
                                                        {{ $room->status == 'Under_maintainance' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">Under
                                                        Maintainance</label>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="" class="btn btn-primary" s>Update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>
