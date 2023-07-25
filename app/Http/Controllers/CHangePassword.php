<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CHangePassword extends Controller
{
    function index(){
        $user = User::where('email', 'admin@gmail.com')->first();
        return view('gallery.password', compact('user'));
    }
    function changePassword(Request $request){
        $validator = Validator::make($request->all(), [
            'confirm_password' => 'required|same:new_password',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::where('id', Auth::user()->id)->first();
        if($request->new_password === $request->confirm_password){
            $user->name = $request->name;
            $user->password = $request->new_password;
            $user->save();
        }
        return redirect()->back();
    }
}
