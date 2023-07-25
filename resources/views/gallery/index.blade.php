<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sales Report') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Button trigger modal -->
                    <button type="" class="btn btn-primary" data-toggle="modal" data-target="#addGallery">
                        Add
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="addGallery" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <p>Data Type</p>
                                            <select class="form-control" name="data_type" id="">
                                                <option value="hotel">Hotel</option>
                                                <option value="restaurant">Restaurant</option>
                                                <option value="lake">Lake</option>
                                                <option value="trek">Treks</option>
                                                <option value="snapShots">Snapshots</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <p>First Word</p>
                                            <input type="text" class="form-control" name="first_word" required>
                                        </div>
                                        <div class="mb-3">
                                            <p>Second Word</p>
                                            <input type="text" class="form-control" name="second_word" required>
                                        </div>
                                        <div class="mb-3">
                                            <p>Image</p>
                                            <input type="file" class="form-control" name="file" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>First Word</th>
                                    <th>Second Word</th>
                                    <th>Data Type</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $i=>$gallery)         
                                <tr>
                                    <td scope="row">{{$i+1}}</td>
                                    <td>{{$gallery->first_word}}</td>
                                    <td>{{$gallery->second_word}}</td>
                                    <td>{{$gallery->data_type}}</td>
                                    <td>
                                        <div>
                                            <img src="{{asset('build/assets/second/gallery/' . $gallery->image_url)}}" style="width:50px; height:50px">
                                        </div>
                                    </td>
                                    <td>
                                        <button type="" class="btn btn-primary" data-toggle="modal" data-target="#editGallery{{$gallery->id}}">
                                            Edit
                                        </button>
                    
                                        <!-- Modal -->
                                        <div class="modal fade" id="editGallery{{$gallery->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('gallery.update', $gallery->id)}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <input type="text" name="id" value="{{$gallery->id}}" hidden>
                                                            <div class="mb-3">
                                                                <p>Data Type</p>
                                                                <select class="form-control" name="data_type" id="">
                                                                    <option value="" disabled>Select One</option>
                                                                    <option value="hotel" {{ $gallery->data_type == 'hotel' ? 'selected' : '' }}>Hotel</option>
                                                                    <option value="restaurant" {{ $gallery->data_type == 'restaurant' ? 'selected' : '' }}>Restaurant</option>
                                                                    <option value="lake" {{ $gallery->data_type == 'lake' ? 'selected' : '' }}>Lake</option>
                                                                    <option value="trek" {{ $gallery->data_type == 'trek' ? 'selected' : '' }}>Treks</option>
                                                                    <option value="snapShots" {{ $gallery->data_type == 'snapShots' ? 'selected' : '' }}>Snapshots </option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <p>First Word</p>
                                                                <input type="text" class="form-control" name="first_word" value="{{$gallery->first_word}}" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <p>Second Word</p>
                                                                <input type="text" class="form-control" name="second_word" value="{{$gallery->second_word}}" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <p>Image</p>
                                                                <div>
                                                                    <img src="{{asset('build/assets/second/gallery/' . $gallery->image_url)}}" style="width:50px; height:50px">
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
