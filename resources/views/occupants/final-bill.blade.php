<x-app-layout>
    <x-slot name="header">
        <div class="d-flex flex-row justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Final Bill of {{ $occupant->name }}
                </h2>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center">
                <div class="mr-5">
                    <i class="fa-solid fa-print fa-2x" id="print-icon"></i>
                </div>
                <div>
                    <button class="btn btn-primary" id="backButton">Back</button>
                </div>
            </div>
        </div>
        <script>
            // Get the element by its ID
            const printIcon = document.getElementById("print-icon");

            // Add onclick event to the element
            printIcon.onclick = function() {
                let body = document.getElementById('body').innerHTML;
                let data = document.getElementById('print-data').innerHTML;
                document.getElementById('body').innerHTML = data;
                window.print();
            };
        </script>
        <script>
            document.getElementById('backButton').addEventListener('click', function() {
                window.history.back(); // This will take the user back to the previous page in the browser's history
            });
        </script>
        



    </x-slot>


    <div class="py-12" id="print-data">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="d-flex justify-content-between">
                        <div>

                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-3">
                                Hotel Travel Inn
                            </h2>
                        </div>
                        <div>
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-3">
                                Date: {{ \Carbon\Carbon::parse($occupant->created_at)->format('Y-m-d') }}

                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <p>From</p>
                            <b>Hotel Travel Inn</b>
                            <p>Street-15, Lakeside, Pokhara</p>
                            <p>Phone: {{ $booking[0]->phone }}</p>
                            <p>Email: hoteltravelinn@gmail.com</p>
                        </div>
                        <div class="col-md-6">
                            <p>To</p>
                            <b>{{ $occupant->name }}</b>
                            <p>{{ $occupant->location }}</p>
                            <p>Phone: {{ $occupant->phone }}</p>
                            <p>Email: {{ $occupant->email }}</p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Price Per Unit</th>
                                    <th>Total</th>
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
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Sub Total</th>
                                    <td>{{ $occupant->bill->sub_total }}</td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Discount</th>
                                    <td>{{ $occupant->bill->discount }}</td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Grand Total</th>
                                    <td>{{ $occupant->bill->total }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('backButton').addEventListener('click', function() {
            window.location.href = "{{ url()->previous() }}";
        });
    </script>
</x-app-layout>
