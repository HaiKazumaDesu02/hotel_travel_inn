<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($occupant->name . "'s Bill") }}
        </h2>

    </x-slot>

    <div class="py-12">
        <!-- Button trigger modal -->

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div style="display: flex;">
                        <div style="flex: 1;">
                            <a href="{{ route('final-bill', $occupant->id) }}" class="btn btn-primary">Final Bill</a>
                        </div>
                        <div style="flex: 1;text-align: right;">
                            <button type="" class="btn btn-primary"
                                 data-toggle="modal"
                                data-target="#exampleModalCenter">
                                Add New Item
                            </button>
                        </div>
                    </div>


                    <!--Add Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLongTitle">Add New Items</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('add-items') }}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="text" name="bill_id" value="{{ $occupant->bill->id }}" hidden>
                                        <div class="mx-2 my-3">
                                            <h5>Item Name</h5>
                                            <input type="text" class="form-control" name="item_name" required>
                                        </div>
                                        <div class="mx-2 my-3">
                                            <h5>Price | Nights</h5>
                                            <input type="number" class="form-control" name="price" required>
                                        </div>
                                        <div class="mx-2 my-3">
                                            <h5>Quantity</h5>
                                            <input type="number" class="form-control" name="quantity" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="" class="btn btn-secondary" data-dismiss="modal"
                                            >Close</button>
                                        <button type="" class="btn btn-primary"
                                            >Add Item</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($billItems as $i => $billItem)
                                    <tr>
                                        <td scope="row">{{ $i + 1 }}</td>
                                        <td>{{ $billItem->item_name }}</td>
                                        <td>{{ $billItem->quantity }}</td>
                                        <td>{{ $billItem->price }}</td>
                                        <td>{{ $billItem->total }}</td>
                                        <td>
                                            <div class="d-flex flex-row" style="padding-left: 30%; gap:10px">
                                                <div>
                                                    <button class="btn btn-primary"
                                                        data-target="#editModal{{ $billItem->id }}" data-toggle="modal">
                                                        Edit
                                                    </button>
                                                </div>
                                                <button class="btn btn-danger" data-toggle="modal"
                                                    data-target="#deleteModal{{ $billItem->id }}">
                                                    Delete
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="deleteModal{{ $billItem->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="deleteModalLabel{{ $billItem->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="deleteModalLabel{{ $billItem->id }}">
                                                        Confirmation</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('item-delete', $billItem->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <input type="text" name="bill_id"
                                                            value="{{ $occupant->bill->id }}" hidden>

                                                        <p>Are you sure you want to delete this item?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal"
                                                            style="background: rgb(90, 80, 80)">Cancel</button>
                                                        <button type="submit" class="btn btn-danger"
                                                            style="background: rgb(210, 38, 38)">Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="editModal{{ $billItem->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLongTitle">Edit Item</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('bill-update') }}" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <input type="text" name="billItem_id"
                                                            value="{{ $billItem->id }}" hidden>
                                                        <div class="mx-2 my-3">
                                                            <h5>Item Name</h5>
                                                            <input type="text" name="bill_id" value="{{$occupant->bill->id}}" hidden>
                                                            <input type="text" class="form-control"
                                                                name="item_name" value="{{ $billItem->item_name }}" required>
                                                        </div>
                                                        <div class="mx-2 my-3">
                                                            <h5>Price</h5>
                                                            <input type="text" class="form-control" name="price"
                                                                value="{{ $billItem->price }}" required>
                                                        </div>
                                                        <div class="mx-2 my-3">
                                                            <h5>Quantity</h5>
                                                            <input type="number" class="form-control"
                                                                name="quantity" value="{{ $billItem->quantity }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="" class="btn btn-secondary"
                                                            data-dismiss="modal"
                                                            >Close</button>
                                                        <button type="" class="btn btn-primary"
                                                            >Edit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>


                        <div class="container mt-5">
                            <div class="row justify-content-center">
                                <div class="col-md-6" style="background: hsl(0, 0%, 93%); border-radius: 15px;">
                                    <p class="text-center" style="font-size: 2rem;">Amount Details</p>
                                    <div class="row p-2">
                                        <div class="col-6">Sub-Total</div>
                                        <div class="col-6"><input class="form-control" type="text" value="+ Rs. {{ $occupant->bill->sub_total }}" disabled></div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-6">Advance Payment</div>
                                        <div class="col-6"><input class="form-control" type="text" value="- Rs. {{ $occupant->advance_payment }}" disabled></div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-6">
                                            <button class="btn btn-success" data-toggle="modal" data-target="#discountModal">
                                                Discount
                                            </button>
                                        </div>
                                        <div class="col-6"><input class="form-control" type="text" value="- Rs. {{ $occupant->bill->discount }}" disabled></div>
                                    </div>
                                    <div class="row p-2">
                                        <div class="col-6">Total</div>
                                        <div class="col-6"><input class="form-control" type="text" value="Rs. {{ $occupant->bill->total }}" disabled></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal fade" id="discountModal" tabindex="-1" role="dialog"
                            aria-labelledby="discountModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="discountModalLabel">
                                            Discount</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('bill-discount') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <p>How much discount would you like to give?</p>
                                            <input type="number" class="form-control" name="discount"
                                                id="" value="{{$occupant->bill->discount}}">
                                            <input type="text" name="occupant_id" value="{{ $occupant->id }}"
                                                hidden>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                style="background: rgb(90, 80, 80)">Cancel</button>
                                            <button type="submit" class="btn btn-danger"
                                                style="background: rgb(24, 143, 38)">Give</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
