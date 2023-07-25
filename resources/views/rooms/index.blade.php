<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rooms') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- <div style="text-align: right;">
                        <a href="{{route('rooms.create')}}" class="btn btn-primary">Add</a>
                    </div> --}}
                    <div class="table-responsive p-6 text-gray-900 dark:text-gray-100">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Room Number</th>
                                    <th>Room Type</th>
                                    <th>Occupancy</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $i => $room)
                                    <tr>
                                        <td scope="row">{{ $room->id }}</td>
                                        <td>{{ $room->room_number }}</td>
                                        <td>{{ $room->room_type }}</td>
                                        <td>{{ $room->occupancy }}</td>
                                        <td>
                                            <img src="{{'build/assets/second/rooms/'.$room->image_url}}" style="width:50px; height:50px" alt="">
                                        </td>
                                        <td>{{ $room->price }}</td>
                                        <td>
                                            <a name="" id="" class="btn btn-success"
                                                href="{{route('rooms.edit', $room->id)}}" role="button">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $rooms->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


