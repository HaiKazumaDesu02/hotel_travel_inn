<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Rooms') }}
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
                        <form action="{{route('rooms.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <p class="mb-1">Room Number</p>
                                <input class="form-control" type="text" placeholder="" name="room_number">
                            </div>
                            <div class="mb-3">
                                <p class="mb-1">Room Type</p>
                                <input class="form-control" type="text" placeholder="" name="room_type">
                            </div>
                            <div class="mb-3">
                                <p class="mb-1">Description</p>
                                <input class="form-control" type="text" placeholder="" name="description">
                            </div>
                            <div class="mb-3">
                                <p class="mb-1">Price</p>
                                <input class="form-control" type="number" placeholder="" name="price">
                            </div>
                            <div style="text-align: right;">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


