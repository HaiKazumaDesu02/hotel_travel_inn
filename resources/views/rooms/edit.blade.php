<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Rooms') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div style="text-align: right;">
                        <a href="{{route('rooms.index')}}" class="btn btn-primary">Back</a>
                    </div>
                    <div class="px-5 pt-3">
                        <form action="{{route('rooms.update', $room->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <p class="mb-1">Room Number</p>
                                <input class="form-control" type="text" placeholder="" name="room_number" value="{{$room->room_number}}" required>
                            </div>
                            <div class="mb-3">
                                <p class="mb-1">Room Type</p>
                                <input class="form-control" type="text" placeholder="" name="room_type" value="{{$room->room_type}}" required>
                            </div>
                            <div class="mb-3">
                                <p class="mb-1">Occupancy</p>
                                <input class="form-control" type="text" placeholder="" name="occupancy" value="{{$room->occupancy}}" required>
                            </div>
                            <div class="mb-3">
                                <p class="mb-1">Description</p>
                                <input class="form-control" type="text" placeholder="" name="description" value="{{$room->description}}">
                            </div>
                            <div class="mb-3">
                                <p class="mb-1">Price</p>
                                <input class="form-control" type="number" placeholder="" name="price" value="{{$room->price}}" required>
                            </div>
                            <div class="mb-3">
                                <p class="mb-1">Floor</p>
                                <input class="form-control" type="text" placeholder="" name="floor" value="{{$room->floor}}" required>
                            </div>
                            <div class="mb-3">
                                <p class="mb-1">Image</p>
                                <div>
                                    <img src="{{asset('build/assets/second/rooms/' .$room->image_url)}}" style="width:50px; height:50px" alt="">
                                </div>
                                <input class="form-control" type="file" placeholder="" name="file">
                            </div>
                            <div style="text-align: right;">
                                <button type="" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


