<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sales Report') }}
        </h2>
    </x-slot>

    <div class="pt-12 pb-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('revenue-search') }}" method="get" class="row g-3">
                        <div class="col-12 col-md-4">
                            <p class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="font-size: 2rem">From</p>
                            <input type="date" name="from" class="form-control" value="{{ $from ? $from : '' }}">
                        </div>
                        <div class="col-12 col-md-4">
                            <p class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="font-size: 2rem">To</p>
                            <input type="date" name="to" class="form-control" value="{{ $to ? $to : '' }}">
                        </div>
                        <div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
                            <button class="btn btn-primary btn-block">
                                Search
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    @if (!empty($results))
    <div class=" pb-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="table-responsive p-6 text-gray-900 dark:text-gray-100">  
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Total Revenue') }}
                    </h2>               
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Date</th>
                                <th>Total Income</th>
                                <th>Total Expenses</th>
                                <th>Profit/Loss</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($results as $i=>$result)
                            <tr>
                                <td>{{$i +1}}</td>
                                <td>{{ $result['date'] }}</td>
                                <td>{{ $result['totalIncome'] }}</td>
                                <td>{{ $result['totalExpenses'] }}</td>
                                <td>{{ $result['profitOrLoss'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">     
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Data Fragments') }}
                    </h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Date</th>
                                <th>Total Income</th>
                                <th>Total Expenses</th>
                                <th>Profit/Loss</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($values as $i=>$result)
                            <tr>
                                <td>{{$i +1}}</td>
                                <td>{{ $result->date }}</td>
                                <td>{{ $result->income }}</td>
                                <td>{{ $result->expenses }}</td>
                                <td>{{ $result->profit_loss }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>


</x-app-layout>


