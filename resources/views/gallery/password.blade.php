<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Change Password') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   
                    {{-- <form action="{{route('change-pass')}}" method="post">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-2">
                                <p>Username</p>
                            </div>
                            <div class="col-5">
                                <input class="form-control" type="text" value="{{$user->name}}" name="name">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-2">
                                <p>New Password</p>
                            </div>
                            <div class="col-5">
                                <input class="form-control" type="text" name="new_password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <p>Confirm Password</p>
                            </div>
                            <div class="col-5">
                                <input class="form-control" type="text" name="confirm_password">
                            </div>
                        </div>
                        <button class="btn btn-primary">
                            Change
                        </button>
                    </form> --}}
                    <form action="{{ route('change-pass') }}" method="post">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-2">
                                <p>Username</p>
                            </div>
                            <div class="col-5">
                                <input class="form-control" type="text" value="{{ old('name', $user->name) }}" name="name">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-2">
                                <p>New Password</p>
                            </div>
                            <div class="col-5">
                                <input class="form-control" type="text" name="new_password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <p>Confirm Password</p>
                            </div>
                            <div class="col-5">
                                <input class="form-control" type="text" name="confirm_password">
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger mt-3">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <button class="btn btn-primary">
                            Change
                        </button>
                    </form>
                    <div class="mt-5">
                      <a  href="{{ route('export') }}" class="btn btn-primary">Export and Refresh Database</a>   
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>
