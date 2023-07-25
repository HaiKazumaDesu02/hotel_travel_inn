<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bills') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form id="search-form" action="{{ route('bill-search') }}" method="get">
                        <div class="row px-3 px-sm-5">
                            <div class="col-12 col-sm-6 col-md-8 col-lg-6">
                                <input class="form-control" name="bill_search" type="text" placeholder="Search Name">
                            </div>
                            <div class="col-12 col-sm-3 col-md-2 col-lg-3 mt-3 mt-sm-0">
                                <select class="form-select" name="status" id="status-select">
                                    <option value="">Select Status</option>
                                    <option value="unpaid" {{ ($status === 'unpaid') ? 'selected' : '' }}>Unpaid</option>
                                    <option value="paid" {{ ($status === 'paid') ? 'selected' : '' }}>Paid</option>
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
                                    <th>Sub Total</th>
                                    <th>Discount</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bills as $i=>$bill)
                                    <tr>
                                        <td scope="row">{{ $i+1 }}</td>
                                        <td>{{ $bill->occupant->name }}</td>
                                        <td>{{ $bill->sub_total }}</td>
                                        <td>{{ $bill->discount }}</td>
                                        <td>{{ $bill->total }}</td>
                                        <td>
                                            @if ($bill->status == 'unpaid')
                                                <button class="btn btn-danger" data-toggle="modal"
                                                    data-target="#editModal{{ $bill->id }}">Unpaid</button>
                                            @else
                                                <button class="btn btn-success" data-toggle="modal"
                                                    data-target="#editModal{{ $bill->id }}">Paid</button>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('final-bill', $bill->occupant->id) }}"
                                                method="get">
                                                @csrf
                                                <button class="btn btn-primary">View</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $bills->links() }}
                        </div>

                        {{-- edit modal  --}}
                        @foreach ($bills as $bill)
                            <div class="modal fade" id="editModal{{ $bill->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p style="font-size: 2.3rem" class="modal-title" id="exampleModalLongTitle">
                                                Edit Bill Status</p>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('bills.update', $bill->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="inlineRadio1" value="unpaid"
                                                        {{ $bill->status == 'unpaid' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">Unpaid</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="inlineRadio2" value="paid"
                                                        {{ $bill->status == 'paid' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Paid</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                    style="color:white; background:rgb(55, 55, 64)">Close</button>
                                                <button type="submit" class="btn btn-primary"
                                                    style="color:white; background:rgb(71, 71, 238)">Change</button>
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
