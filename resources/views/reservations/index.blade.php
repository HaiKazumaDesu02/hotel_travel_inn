<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Reservations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form id="search-form" action="{{ route('search-reservation') }}" method="get">
                        <div class="row px-3 px-sm-5">
                            <div class="col-12 col-sm-6 col-md-8 col-lg-6">
                                <input class="form-control" name="reservation_search" type="text" placeholder="Search Name">
                            </div>
                            <div class="col-12 col-sm-3 col-md-2 col-lg-3 mt-3 mt-sm-0">
                                <select class="form-select" name="status" id="status-select">
                                    <option value="">Select Status</option>
                                    <option value="not_responded" {{ ($status === 'not_responded') ? 'selected' : '' }}>Not Responded</option>
                                    <option value="responded" {{ ($status === 'responded') ? 'selected' : '' }}>Responded</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-3 col-md-2 col-lg-1 mt-3 mt-sm-0">
                                <button class="btn btn-primary btn-block">Search</button>
                            </div>
                        </div>
                    </form>
                    
                    
                    <script>
                        // Add event listener to the select element
                        document.getElementById('status-select').addEventListener('change', function () {
                            // Submit the form using JavaScript
                            document.getElementById('search-form').submit();
                        });
                    </script>
                    
                    
                    <div class="table-responsive p-6 text-gray-900 dark:text-gray-100">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Customer Name</th>
                                    <th>Adult</th>
                                    <th>Children</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $i=>$reservation)
                                    <tr>
                                        <td scope="row">{{ $i+1 }}</td>
                                        <td>
                                            <div>
                                              <p>
                                                  {{ $reservation->first_name }}
                                              </p>
                                              <p>
                                                  {{ $reservation->phone }}
                                              </p>
                                              
                                            </div>
                                        </td>
                                        <td>{{ $reservation->adults }}</td>
                                        <td>{{ $reservation->children }}</td>
                                        <td>{{ $reservation->check_in }}</td>
                                        <td>{{ $reservation->check_out }}</td>
                                        <td>
                                            @if ($reservation->status == 'responded')
                                                <button class="btn btn-success" data-toggle="modal"
                                                    data-target="#editStatus{{ $reservation->id }}">Responded</button>
                                            @else
                                                <button class="btn btn-danger" data-toggle="modal"
                                                    data-target="#editStatus{{ $reservation->id }}">Not Responded</button>
                                            @endif
                                        </td>
                                        <td>
                                            <button type="" class="btn btn-primary" data-toggle="modal" data-target="#viewReservations">
                                                View
                                            </button>
                        
                                            <!-- Modal -->
                                            <div class="modal fade" id="viewReservations" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Reservation Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                           
                                                            <div class="modal-body d-flex flex-column">
                                                                <div>
                                                                    <label for="">Name: {{ $reservation->first_name }}  {{ $reservation->last_name }} </label>
                                                                </div>
                                                                <div>
                                                                    <label for="">Phone: {{ $reservation->phone }} </label>
                                                                </div>
                                                                <div>
                                                                    <label for="">Room Type: {{ $reservation->room_type }}</label>
                                                                </div>
                                                                <div>
                                                                    <label for="">Check In:{{ $reservation->check_in }} </label>
                                                                </div>
                                                                <div>
                                                                    <label for="">Check In Time:{{ $reservation->check_in_time }} </label>
                                                                </div>
                                                                <div>
                                                                    <label for="">Check Out:{{ $reservation->check_out }} </label>
                                                                </div>
                                                                <div>
                                                                    <label for="">Check Out Time:{{ $reservation->check_out_time }} </label>
                                                                </div>
                                                                <div>
                                                                    <label for="">Adults:{{ $reservation->adults }} </label>
                                                                </div>
                                                                <div>
                                                                    <label for="">Children: {{ $reservation->children }}</label>
                                                                </div>
                                                                <div>
                                                                    <label for="">Address: {{ $reservation->address }}</label>
                                                                </div>
                                                                <div>
                                                                    <label for="">Zip Code: {{ $reservation->zip_code }}</label>
                                                                </div>
                                                                <div>
                                                                    <label for="">City:{{ $reservation->city }} </label>
                                                                </div>
                                                                <div>
                                                                    <label for="">Email: {{ $reservation->email }}</label>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $reservations->links() }}
                        </div>

                        @foreach ($reservations as $reservation)
                            <div class="modal fade" id="editStatus{{ $reservation->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p style="font-size: 2.3rem" class="modal-title" id="exampleModalLongTitle">
                                                Edit Reservation Status</p>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('reservation-update') }}" method="post">
                                            @csrf
                                            <input type="text" value="{{$reservation->id}}" name="id" hidden>
                                            <div class="modal-body">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="inlineRadio1" value="responded"
                                                        {{ $reservation->status == 'responded' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">Responded</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="inlineRadio2" value="not_responded"
                                                        {{ $reservation->status == 'not_responded' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Not Responded</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" data-dismiss="modal"
                                                   >Close</button>
                                                <button class="btn btn-primary"
                                                    >Change</button>
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
