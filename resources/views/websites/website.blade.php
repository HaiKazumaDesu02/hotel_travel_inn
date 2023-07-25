<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Website Change') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link  {{ $status === 'photo' ? 'active' : '' }}" id="pills-photo-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-photo" type="button" role="tab"
                                    aria-controls="pills-photo"
                                    aria-selected="{{ $status === 'photo' ? 'true' : 'false' }}">Landing Photo</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $status === 'rate' ? 'active' : '' }}" id="pills-rate-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-rate" type="button" role="tab"
                                    aria-controls="pills-rate"
                                    aria-selected="{{ $status === 'rate' ? 'true' : 'false' }}">Rate</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link  {{ $status === 'statistic' ? 'active' : '' }}"
                                    id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-statistics"
                                    type="button" role="tab" aria-controls="pills-statistics"
                                    aria-selected="{{ $status === 'statistic' ? 'true' : 'false' }}">Statistics</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link  {{ $status === 'deluxeCoupleBed' ? 'active' : '' }}"
                                    id="pills-deluxeCoupleBed-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-deluxeCoupleBed" type="button" role="tab"
                                    aria-controls="pills-deluxeCoupleBed"
                                    aria-selected="{{ $status === 'deluxeCoupleBed' ? 'true' : 'false' }}">Deluxe Couple
                                    Bed</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link  {{ $status === 'coupleBed' ? 'active' : '' }}"
                                    id="pills-coupleBed-tab" data-bs-toggle="pill" data-bs-target="#pills-coupleBed"
                                    type="button" role="tab" aria-controls="pills-coupleBed"
                                    aria-selected="{{ $status === 'coupleBed' ? 'true' : 'false' }}">Couple
                                    Bed</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link  {{ $status === 'twinBed' ? 'active' : '' }}"
                                    id="pills-twinBed-tab" data-bs-toggle="pill" data-bs-target="#pills-twinBed"
                                    type="button" role="tab" aria-controls="pills-twinBed"
                                    aria-selected="{{ $status === 'twinBed' ? 'true' : 'false' }}">Twin Bed</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link  {{ $status === 'tripleBed' ? 'active' : '' }}"
                                    id="pills-tripleBed-tab" data-bs-toggle="pill" data-bs-target="#pills-tripleBed"
                                    type="button" role="tab" aria-controls="pills-tripleBed"
                                    aria-selected="{{ $status === 'tripleBed' ? 'true' : 'false' }}">Triple
                                    Bed</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link  {{ $status === 'review' ? 'active' : '' }}"
                                    id="pills-review-tab" data-bs-toggle="pill" data-bs-target="#pills-review"
                                    type="button" role="tab" aria-controls="pills-review"
                                    aria-selected="{{ $status === 'review' ? 'true' : 'false' }}">Reviews</button>
                            </li>




                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade {{ $status === 'rate' ? 'show active' : '' }}" id="pills-rate"
                                role="tabpanel" aria-labelledby="pills-rate-tab">
                                <div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Room Type</th>
                                                <th>Room Name</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rates as $rate)
                                                <tr>
                                                    <td scope="row">{{ $rate->id }}</td>
                                                    <td>{{ $rate->room_type }}</td>
                                                    <td>{{ $rate->rate }}</td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="" class="btn btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#editRate{{ $rate->id }}">
                                                            Edit
                                                        </button>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="editRate{{ $rate->id }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <form action="{{ route('change-rate') }}" method="get">
                                                                @csrf
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="exampleModalLongTitle">
                                                                        Edit
                                                                        Rates</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="text" name="id"
                                                                        id="" value="{{ $rate->id }}"
                                                                        hidden>
                                                                    <div class="mb-3">
                                                                        <p>Room Type</p>
                                                                        <input type="text" class="form-control"
                                                                            name="room_type" id=""
                                                                            value="{{ $rate->room_type }}"  required>
                                                                    </div>
                                                                    <div>

                                                                        <p>Rate</p>
                                                                        <input type="number" name="rate"
                                                                            class="form-control" id=""
                                                                            value="{{ $rate->rate }}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type=""
                                                                        class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade {{ $status === 'statistic' ? 'show active' : '' }}"
                                id="pills-statistics" role="tabpanel" aria-labelledby="pills-statistics-tab">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($statistics as $statistic)
                                            <tr>
                                                <td scope="row">{{ $statistic->id }}</td>
                                                <td>{{ $statistic->name }}</td>
                                                <td>{{ $statistic->number }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="" class="btn btn-primary"
                                                        data-toggle="modal"
                                                        data-target="#editStatistic{{ $statistic->id }}">
                                                        Edit
                                                    </button>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="editStatistic{{ $statistic->id }}"
                                                tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <form action="{{ route('change-statistic') }}"
                                                            method="get">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                                    Edit
                                                                    Rates</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <input type="text" name="id" id=""
                                                                    value="{{ $statistic->id }}" hidden>
                                                                <div class="mb-3">
                                                                    <p>Room Type</p>
                                                                    <input type="text" class="form-control"
                                                                        name="name" id=""
                                                                        value="{{ $statistic->name }}" disabled>
                                                                </div>
                                                                <div>

                                                                    <p>Rate</p>
                                                                    <input type="number" name="number"
                                                                        class="form-control" id=""
                                                                        value="{{ $statistic->number }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade {{ $status === 'photo' ? 'show active' : '' }}"
                                id="pills-photo" role="tabpanel" aria-labelledby="pills-photo-tab">

                                <div class="mb-3">
                                    <table class="table">
                                        <p class="fw-bold" style="font-size: 1.6rem">Opening Photo</p>

                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($landings as $landing)
                                                <tr>
                                                    <td scope="row">{{ $landing->id }}</td>
                                                    <td>{{ $landing->name }}</td>
                                                    <td>
                                                        <div style="width:50px">
                                                            <img src="{{ asset('build/assets/second/img/my_img/' . $landing->image_url) }}"
                                                                alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="" class="btn btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#editLanding{{ $landing->id }}">
                                                            Edit
                                                        </button>
    
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="editLanding{{ $landing->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <form action="{{ route('change-landing') }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLongTitle">Edit Landing
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <input type="text" name="id"
                                                                                class="form-control"
                                                                                value="{{ $landing->id }}" hidden>
                                                                            <div class="mb-3">
                                                                                <p>Image Name</p>
                                                                                <input type="text" name="name"
                                                                                    class="form-control"
                                                                                    value="{{ $landing->name }}" disabled>
                                                                            </div>
                                                                            <div>
                                                                                <p>Image File</p>
                                                                                <div style="width:50px">
                                                                                    <img src="{{ asset('build/assets/second/img/my_img/' . $landing->image_url) }}"
                                                                                        alt="">
                                                                                </div>
                                                                                <img src="{{ asset($landing->image_url) }}"
                                                                                    width="50px" alt="">
                                                                                <input type="file" name="file"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type=""
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type=""
                                                                                class="btn btn-primary">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </div>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                              
                                <div class="mt-5">

                                    <p class="fw-bold" style="font-size: 1.6rem">Owner Introduction</p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Photo</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($owners as $owner)
                                                <tr>
                                                    <td scope="row">{{ $owner->id }}</td>
                                                    <td>{{ $owner->name }}</td>
                                                    <td>{{ Str::limit($owner->description, 20) }}</td>

                                                    <td>
                                                        <div style="width:50px">
                                                            <img src="{{ asset('build/assets/second/img/my_img/owner/' . $owner->image_url) }}"
                                                                alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="" class="btn btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#editOwner{{ $owner->id }}">
                                                            Edit
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="editOwner{{ $owner->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalCenterTitle"
                                                            aria-hidden="true">
                                                            <form action="{{ route('change-owner') }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLongTitle">Edit Owner
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <input type="text" name="id"
                                                                                class="form-control"
                                                                                value="{{ $owner->id }}" hidden>
                                                                            <div class="mb-3">
                                                                                <p>Name</p>
                                                                                <input type="text" name="name"
                                                                                    class="form-control"
                                                                                    value="{{ $owner->name }}" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <p>Description</p>
                                                                                <input type="text"
                                                                                    name="description"
                                                                                    class="form-control"
                                                                                    value="{{ $owner->description }}" required>
                                                                            </div>
                                                                            <div>
                                                                                <p>Image File</p>
                                                                                <div style="width:50px">
                                                                                    <img src="{{ asset('build/assets/second/img/my_img/owner/' . $owner->image_url) }}"
                                                                                        alt="">
                                                                                </div>
                                                                                <input type="file" name="file"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type=""
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type=""
                                                                                class="btn btn-primary">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </div>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-5">
                                    <p class="fw-bold" style="font-size: 1.6rem">Youtube Link</p>
                                    
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Name</th>
                                                <th>Link</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">{{ $youtube[0]->id }}</td>
                                                <td>{{ $youtube[0]->name }}</td>
                                                <td>
                                                    <div style="max-width: 30ch; overflow: hidden; text-overflow: ellipsis;">
                                                        {{ $youtube[0]->link }}
                                                    </div>
                                                </td>
                
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#editYoutube{{ $youtube[0]->id }}">
                                                        Edit
                                                    </button>
                
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="editYoutube{{ $youtube[0]->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <form action="{{ route('change-youtube') }}" method="post">
                                                                    @csrf
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title
                                                                        </h5>
                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="text" name="id" value="{{ $youtube[0]->id }}" hidden>
                                                                        <div class="mb-3">
                                                                            <p>Name</p>
                                                                            <input type="text" class="form-control" name="name"
                                                                                value="{{ $youtube[0]->name }}" disabled>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <p>Link</p>
                                                                            <input type="text" class="form-control" name="link"
                                                                                value="{{ $youtube[0]->link }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="" class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-5">

                                    <p class="fw-bold" style="font-size: 1.6rem">Booking Details</p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Photo</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bookings as $booking)
                                                <tr>
                                                    <td scope="row">{{ $booking->id }}</td>
                                                    <td>{{ $booking->name }}</td>
                                                    <td>{{ $booking->phone }}</td>

                                                    <td>
                                                        <div style="width:50px">
                                                            <img src="{{ asset('build/assets/second/img/my_img/owner/' . $booking->image_url) }}"
                                                                alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="" class="btn btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#editBooking{{ $booking->id }}">
                                                            Edit
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="editBooking{{ $booking->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalCenterTitle"
                                                            aria-hidden="true">
                                                            <form action="{{ route('change-booking') }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLongTitle">Edit Owner
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <input type="text" name="id"
                                                                                class="form-control"
                                                                                value="{{ $booking->id }}" hidden>
                                                                            <div class="mb-3">
                                                                                <p>Name</p>
                                                                                <input type="text" name="name"
                                                                                    class="form-control"
                                                                                    value="{{ $booking->name }}" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <p>Phone</p>
                                                                                <input type="text"
                                                                                    name="phone"
                                                                                    class="form-control"
                                                                                    value="{{ $booking->phone }}" required>
                                                                            </div>
                                                                            <div>
                                                                                <p>Image File</p>
                                                                                <div style="width:50px">
                                                                                    <img src="{{ asset('build/assets/second/img/my_img/owner/' . $booking->image_url) }}"
                                                                                        alt="">
                                                                                </div>
                                                                                <input type="file" name="file"
                                                                                    class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type=""
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type=""
                                                                                class="btn btn-primary">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </div>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade {{ $status === 'deluxeCoupleBed' ? 'show active' : '' }}"
                                id="pills-deluxeCoupleBed" role="tabpanel"
                                aria-labelledby="pills-deluxeCoupleBed-tab">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($deluxeCoupleBeds as $deluxeCoupleBed)
                                            <tr>
                                                <td scope="row">{{ $deluxeCoupleBed->id }}</td>
                                                <td>{{ $deluxeCoupleBed->name }}</td>
                                                <td>
                                                    <div style="width:50px">
                                                        <img src="{{ asset('build/assets/second/img/my_img/Deluxe Couple Bed/' . $deluxeCoupleBed->image_url) }}"
                                                            alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="" class="btn btn-primary"
                                                        data-toggle="modal"
                                                        data-target="#editDeluxeCoupleBed{{ $deluxeCoupleBed->id }}">
                                                        Edit
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade"
                                                        id="editDeluxeCoupleBed{{ $deluxeCoupleBed->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <form action="{{ route('change-deluxe-couple-bed') }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLongTitle">Edit Deluxe
                                                                            Couple Bed
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="text" name="id"
                                                                            class="form-control"
                                                                            value="{{ $deluxeCoupleBed->id }}" hidden>
                                                                        <div class="mb-3">
                                                                            <p>Image Name</p>
                                                                            <input type="text" name="name"
                                                                                class="form-control"
                                                                                value="{{ $deluxeCoupleBed->name }}"
                                                                                disabled>
                                                                        </div>
                                                                        <div>
                                                                            <p>Image File</p>
                                                                            <div style="width:50px">
                                                                                <img src="{{ asset('build/assets/second/img/my_img/Deluxe Couple Bed/' . $deluxeCoupleBed->image_url) }}"
                                                                                    alt="">
                                                                            </div>
                                                                            <input type="file" name="file"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type=""
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type=""
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade {{ $status === 'coupleBed' ? 'show active' : '' }}"
                                id="pills-coupleBed" role="tabpanel" aria-labelledby="pills-coupleBed-tab">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($coupleBeds as $coupleBed)
                                            <tr>
                                                <td scope="row">{{ $coupleBed->id }}</td>
                                                <td>{{ $coupleBed->name }}</td>
                                                <td>
                                                    <div style="width:50px">
                                                        <img src="{{ asset('build/assets/second/img/my_img/couple_beds/' . $coupleBed->image_url) }}"
                                                            alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="" class="btn btn-primary"
                                                        data-toggle="modal"
                                                        data-target="#editCoupleBed{{ $coupleBed->id }}">
                                                        Edit
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="editCoupleBed{{ $coupleBed->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <form action="{{ route('change-couple-bed') }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLongTitle">Edit Couple Bed
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="text" name="id"
                                                                            class="form-control"
                                                                            value="{{ $coupleBed->id }}" hidden>
                                                                        <div class="mb-3">
                                                                            <p>Image Name</p>
                                                                            <input type="text" name="name"
                                                                                class="form-control"
                                                                                value="{{ $coupleBed->name }}"
                                                                                disabled>
                                                                        </div>
                                                                        <div>
                                                                            <p>Image File</p>
                                                                            <div style="width:50px">
                                                                                <img src="{{ asset('build/assets/second/img/my_img/couple_beds/' . $coupleBed->image_url) }}"
                                                                                    alt="">
                                                                            </div>
                                                                            <input type="file" name="file"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type=""
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type=""
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade {{ $status === 'twinBed' ? 'show active' : '' }}"
                                id="pills-twinBed" role="tabpanel" aria-labelledby="pills-twinBed-tab">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($twinBeds as $twinBed)
                                            <tr>
                                                <td scope="row">{{ $twinBed->id }}</td>
                                                <td>{{ $twinBed->name }}</td>
                                                <td>
                                                    <div style="width:50px">
                                                        <img src="{{ asset('build/assets/second/img/my_img/Twin Bed/' . $twinBed->image_url) }}"
                                                            alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="" class="btn btn-primary"
                                                        data-toggle="modal"
                                                        data-target="#editTwinBed{{ $twinBed->id }}">
                                                        Edit
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="editTwinBed{{ $twinBed->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <form action="{{ route('change-twin-bed') }}" method="post"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLongTitle">Edit Twin Bed
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="text" name="id"
                                                                            class="form-control"
                                                                            value="{{ $twinBed->id }}" hidden>
                                                                        <div class="mb-3">
                                                                            <p>Image Name</p>
                                                                            <input type="text" name="name"
                                                                                class="form-control"
                                                                                value="{{ $twinBed->name }}" disabled>
                                                                        </div>
                                                                        <div>
                                                                            <p>Image File</p>
                                                                            <div style="width:50px">
                                                                                <img src="{{ asset('build/assets/second/img/my_img/Twin Bed/' . $twinBed->image_url) }}"
                                                                                    alt="">
                                                                            </div>
                                                                            <input type="file" name="file"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type=""
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type=""
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade {{ $status === 'tripleBed' ? 'show active' : '' }}"
                                id="pills-tripleBed" role="tabpanel" aria-labelledby="pills-tripleBed-tab">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tripleBeds as $tripleBed)
                                            <tr>
                                                <td scope="row">{{ $tripleBed->id }}</td>
                                                <td>{{ $tripleBed->name }}</td>
                                                <td>
                                                    <div style="width:50px">
                                                        <img src="{{ asset('build/assets/second/img/my_img/Triple Bed/' . $tripleBed->image_url) }}"
                                                            alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="" class="btn btn-primary"
                                                        data-toggle="modal"
                                                        data-target="#editTripleBed{{ $tripleBed->id }}">
                                                        Edit
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="editTripleBed{{ $tripleBed->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <form action="{{ route('change-triple-bed') }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLongTitle">Edit Triple Bed
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="text" name="id"
                                                                            class="form-control"
                                                                            value="{{ $tripleBed->id }}" hidden>
                                                                        <div class="mb-3">
                                                                            <p>Image Name</p>
                                                                            <input type="text" name="name"
                                                                                class="form-control"
                                                                                value="{{ $tripleBed->name }}"
                                                                                disabled>
                                                                        </div>
                                                                        <div>
                                                                            <p>Image File</p>
                                                                            <div style="width:50px">
                                                                                <img src="{{ asset('build/assets/second/img/my_img/Triple Bed/' . $tripleBed->image_url) }}"
                                                                                    alt="">
                                                                            </div>
                                                                            <input type="file" name="file"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type=""
                                                                            class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type=""
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade {{ $status === 'review' ? 'show active' : '' }}"
                                id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                <div>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#addReview">
                                        Add Reviews
                                    </button>
                                    <div class="modal fade" id="addReview" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <form action="{{ route('add-review') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Review
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <p>Name</p>
                                                            <input type="text" name="name"
                                                                class="form-control" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <p>Photo</p>
                                                            <input type="file" name="file"
                                                                class="form-control" >
                                                        </div>
                                                        <div class="mb-3">
                                                            <p>Review Title</p>
                                                            <input type="text" name="title"
                                                                class="form-control" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <p>Review</p>
                                                            <textarea name="review" class="form-control" required></textarea>

                                                        </div>
                                                        <div class="mb-3">
                                                            <p>City</p>
                                                            <input type="text" name="city"
                                                                class="form-control" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <p>Country</p>
                                                            <input type="text" name="country"
                                                                class="form-control" required>
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>Review Title</th>
                                                <th>Review</th>
                                                <th>City</th>
                                                <th>Country</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($reviews as $review)
                                                <tr>
                                                    <td scope="row">{{ $review->id }}</td>
                                                    <td>{{ $review->name }}</td>
                                                    <td>
                                                        <div style="width:50px">
                                                            <img src="{{ asset('build/assets/second/img/my_img/reviewers/' . $review->image_url) }}"
                                                                alt="">
                                                        </div>
                                                    </td>
                                                    <td>{{ Str::limit($review->title, 20) }}</td>
                                                    <td>{{ Str::limit($review->review, 20) }}</td>
                                                    <td>{{ $review->city }}</td>
                                                    <td>{{ $review->country }}</td>
                                                    <td>
                                                        <button type="" class="btn btn-primary"
                                                            data-toggle="modal"
                                                            data-target="#editReview{{ $review->id }}">
                                                            Edit
                                                        </button>
    
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="editReview{{ $review->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <form action="{{ route('change-review') }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLongTitle">Edit Review
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <input type="text" name="id"
                                                                                class="form-control"
                                                                                value="{{ $review->id }}" hidden>
                                                                            <div class="mb-3">
                                                                                <p>Name</p>
                                                                                <input type="text" name="name"
                                                                                    class="form-control"
                                                                                    value="{{ $review->name }}" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <p>Image File</p>
                                                                                <div style="width:50px">
                                                                                    <img src="{{ asset('build/assets/second/img/my_img/reviewers/' . $review->image_url) }}"
                                                                                        alt="">
                                                                                </div>
                                                                                <input type="file" name="file"
                                                                                    class="form-control">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <p>Review Title</p>
                                                                                <input type="text" name="title"
                                                                                    class="form-control"
                                                                                    value="{{ $review->title }}" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <p>Review</p>
                                                                                <textarea name="review" required class="form-control">{{ $review->review }}</textarea>
    
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <p>City</p>
                                                                                <input type="text" name="city"
                                                                                    class="form-control"
                                                                                    value="{{ $review->city }}" required>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <p>Country</p>
                                                                                <input type="text" name="country"
                                                                                    class="form-control"
                                                                                    value="{{ $review->country }}" required>
                                                                            </div>
    
    
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type=""
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type=""
                                                                                class="btn btn-primary">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </div>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                              
                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

