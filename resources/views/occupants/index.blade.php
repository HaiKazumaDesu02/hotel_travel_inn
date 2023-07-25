<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Guests') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
            
                


                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="row">
                        <div class="col-md-8 col-lg-9" style="position: relative">
                            <form action="{{ route('search-guest') }}" method="get" class="d-flex">
                                <input class="form-control guest-input" style="height: 50px; border-radius:15px" name="guest_search" type="text" placeholder="Name | Email | Phone | yyyy-mm-dd">
                                <button class="btn btn-primary guest-search" style="position: absolute; right:25px; top:6px; border-radius:12px">Search</button>
                            </form>
                        </div>
                        <div class="col-md-4 col-lg-3 mt-3 mt-md-0">
                            <form action="{{ route('entry-form') }}" class="d-flex justify-content-md-end">
                                <button class="btn btn-primary btn-block" style="border-radius:12px">Add</button>
                            </form>
                        </div>
                    </div>
                    
                    
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Entry Guest</th>
                                    <th>Phone Number</th>
                                    <th>Total Guests</th>
                                    <th>Room Number</th>
                                    <th>Check-In</th>
                                    <th>Check-Out</th>
                                    <th>Advance Payment</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($occupants as $i => $occupant)
                                    <tr>
                                        <td scope="row" class="align-middle">{{ $occupant->id }}</td>
                                        <td class="align-middle">
                                            <div class="ml-3">
                                                <p class="font-weight-bold mb-1"> {{ $occupant->name }}</p>
                                                <p class="text-muted mb-0"> {{ $occupant->email }}</p>
                                            </div>
                                        </td>
                                        <td class="align-middle">{{ $occupant->phone }}</td>
                                        <td class="align-middle">{{ $occupant->total_guests }}</td>
                                        <td class="align-middle">{{ $occupant->room_number }}</td>
                                        <td class="align-middle">{{ $occupant->check_in }}</td>
                                        <td class="align-middle">{{ $occupant->check_out }}</td>
                                        <td class="align-middle">Rs. {{ $occupant->advance_payment }}</td>
                                        <td class="align-middle">
                                            <a name="" id="" class="btn btn-success" href="{{ route('guest-bill', $occupant->id) }}" role="button">
                                                Bill
                                            </a>
                                            <button type="" class="btn btn-primary" data-toggle="modal" data-target="#editGuest{{$occupant->id}}">
                                                Edit
                                            </button>
                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="editGuest{{$occupant->id}}" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{route('occupants.update', $occupant->id)}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <input type="text" name="id" value="{{$occupant->id}}" hidden>
                                                                <div class="mb-3">
                                                                    <p>Guest Name</p>
                                                                    <input type="text" class="form-control" name="name" value="{{$occupant->name}}" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <p>Email</p>
                                                                    <input type="text" class="form-control" name="email" value="{{$occupant->email}}" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <p>Phone</p>
                                                                    <input type="text" class="form-control" name="phone" value="{{$occupant->phone}}" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <p>Total Guests</p>
                                                                    <input type="number" class="form-control" name="total_guests" value="{{$occupant->total_guests}}" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <p>Room Number</p>
                                                                    <input type="number" class="form-control" name="room_number" value="{{$occupant->room_number}}" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <p>Check In</p>
                                                                    <input type="date" class="form-control" name="check_in" value="{{$occupant->check_in}}" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <p>Check Out</p>
                                                                    <input type="date" class="form-control" name="check_out" value="{{$occupant->check_out}}" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <p>Advance Payment</p>
                                                                    <input type="number" class="form-control" name="advance_payment" value="{{$occupant->advance_payment}}" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <p>Image</p>
                                                                    <div>
                                                                        <img src="{{asset('build/assets/second/guests/'. $occupant->image_url)}}" style="width:50px; height:50px;" alt="">
                                                                    </div>
                                                                    <input type="file" class="form-control" name="file">
                                                                </div>
                                                               
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="" class="btn btn-primary">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mt-4">
                        {{ $occupants->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        table.table {
            border-collapse: separate;
            border-spacing: 0 10px;
        }
    </style>


</x-app-layout>
