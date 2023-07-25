<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Expenses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="d-flex justify-content-between">
                        <div>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addSupplier">
                                Add New Suppliers
                            </button>
                            <!-- Button trigger modal -->
                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                List Suppliers
                            </button>

                            <!-- Suppliers List Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title" id="exampleModalLongTitle">Suppliers List</h1>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            @foreach ($suppliers as $supplier)
                                                <div class="mb-3 d-flex flex-wrap align-items-center">
                                                    <div style="flex: 1;">
                                                        <p class="fw-bold" style="font-size: 2.5rem; margin-bottom: 0;">
                                                            {{ $supplier->name }}</p>
                                                        <p style="font-size: 1.4rem; color: #777; margin-bottom: 0;">
                                                            {{ $supplier->phone }}</p>
                                                    </div>
                                                    <div style="margin-left: auto;">
                                                        <button class="btn btn-link p-0" data-toggle="modal"
                                                            data-target="#editSupplier{{ $supplier->id }}">
                                                            <i class="fas fa-edit" style="font-size: 1.6rem;"></i>
                                                        </button>
                                                        <button class="btn btn-link p-0" data-toggle="modal"
                                                            data-target="#deleteSupplierModal{{ $supplier->id }}">
                                                            <i class="fas fa-trash text-danger"
                                                                style="font-size: 1.6rem;"></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        style="flex-basis: 100%; height: 5px; background-color: #ccc; margin-top: 10px;">
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="deleteSupplierModal{{ $supplier->id }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="deleteModalLabel{{ $supplier->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"
                                                                    id="deleteModalLabel{{ $supplier->id }}">
                                                                    Confirmation</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form
                                                                action="{{ route('supplier-destroy', $supplier->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <p>Are you sure you want to delete this item?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="" class="btn btn-secondary"
                                                                        data-dismiss="modal">Cancel</button>
                                                                    <button type=""
                                                                        class="btn btn-danger">Delete</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="editSupplier{{ $supplier->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="editSupplierTitle"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="editSupplierLongTitle">Add
                                                                    New Suppliers</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('supplier-edit') }}" method="post">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <input type="text" name="id" id=""
                                                                        value="{{ $supplier->id }}" hidden>
                                                                    <div class="mx-2 my-3">
                                                                        <h5>Supplier Name</h5>
                                                                        <input type="text" class="form-control"
                                                                            name="name"
                                                                            value="{{ $supplier->name }}">
                                                                    </div>
                                                                    <div class="mx-2 my-3">
                                                                        <h5>Phone Number </h5>
                                                                        <input type="text" class="form-control"
                                                                            name="phone"
                                                                            value="{{ $supplier->phone }}">
                                                                    </div>
                                                                    <div class="mx-2 my-3">
                                                                        <h5>Description</h5>
                                                                        <input type="text" class="form-control"
                                                                            name="description"
                                                                            value="{{ $supplier->description }}">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="" class="btn btn-secondary"
                                                                        data-dismiss="modal" ">Close</button>
                                                                    <button type="" class="btn btn-primary">
                                                                        Edit</button>
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
                        <div style="text-align: right;">
                            <button class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                Add New Expense
                            </button>
                        </div>
                    </div>

                    {{-- add expense modal  --}}
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLongTitle">Add New Items
                                    </h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('expenses.store') }}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mx-2 my-3">
                                            <h5>Supplier Name</h5>
                                            <select class="form-control" name="name"
                                                id="" required>
                                                @foreach ($suppliers as $supplier)
                                                    <option value="{{ $supplier->id }}">
                                                        {{ $supplier->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mx-2 my-3">
                                            <h5>Total Cost</h5>
                                            <input type="number" class="form-control" name="total"
                                                required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal"
                                            style="color:white; background:rgb(55, 55, 64)">Close</button>
                                        <button type="submit" class="btn btn-primary"
                                            style="color:white; background:rgb(71, 71, 238)">Add
                                            Item</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- add supplier modal  --}}
                    <div class="modal fade" id="addSupplier" tabindex="-1" role="dialog"
                        aria-labelledby="addSupplierTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="addSupplierLongTitle">Add New
                                        Suppliers</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ route('supplier-store') }}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mx-2 my-3">
                                            <h5>Supplier Name</h5>
                                            <input type="text" class="form-control" name="name"
                                                required>
                                        </div>
                                        <div class="mx-2 my-3">
                                            <h5>Phone Number </h5>
                                            <input type="text" class="form-control"
                                                name="phone">
                                        </div>
                                        <div class="mx-2 my-3">
                                            <h5>Description</h5>
                                            <input type="text" class="form-control"
                                                name="description">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal"
                                            style="color:white; background:rgb(55, 55, 64)">Close</button>
                                        <button type="submit" class="btn btn-primary"
                                            style="color:white; background:rgb(71, 71, 238)">Add
                                            Item</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Item Name</th>
                                    <th>Total Cost</th>
                                    <th>Stored Date</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $i => $expense)
                                    <tr>
                                        <td scope="row">{{ $i + 1 }}</td>
                                        <td>{{ $expense->supplier->name }}</td>
                                        <td>{{ $expense->total }}</td>
                                        <td>{{ \Carbon\Carbon::parse($expense->created_at)->format('Y, F j \a\t g:ia') }}
                                        </td>
                                        <td>
                                            <div class="d-flex flex-row"
                                                style="padding-left: 35%; gap:10px">
                                                <div>
                                                    <button class="btn btn-primary"
                                                        data-target="#editModal{{ $expense->id }}"
                                                        data-toggle="modal">
                                                        Edit
                                                    </button>
                                                </div>
                                                <button class="btn btn-danger" data-toggle="modal"
                                                    data-target="#deleteModal{{ $expense->id }}">
                                                    Delete
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="deleteModal{{ $expense->id }}"
                                        tabindex="-1" role="dialog"
                                        aria-labelledby="deleteModalLabel{{ $expense->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"
                                                        id="deleteModalLabel{{ $expense->id }}">
                                                        Confirmation</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form
                                                    action="{{ route('expenses.destroy', $expense->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-body">
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
                                    <div class="modal fade" id="editModal{{ $expense->id }}"
                                        tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLongTitle">
                                                        Edit Item</h4>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form
                                                    action="{{ route('expenses.update', $expense->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mx-2 my-3">
                                                            <h5>Item Name</h5>
                                                            <input type="text" class="form-control"
                                                                name="item_name"
                                                                value="{{ $expense->supplier->name }}"
                                                                disabled>
                                                        </div>
                                                        <div class="mx-2 my-3">
                                                            <h5>Total Cost</h5>
                                                            <input type="number" class="form-control"
                                                                name="total" required
                                                                value="{{ $expense->total }}">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal"
                                                            style="color:white; background:rgb(55, 55, 64)">Close</button>
                                                        <button type="submit" class="btn btn-primary"
                                                            style="color:white; background:rgb(71, 71, 238)">Edit
                                                            Item</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $expenses->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
