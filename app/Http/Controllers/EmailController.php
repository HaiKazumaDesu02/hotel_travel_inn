<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormEmail;



class EmailController extends Controller
{
    public function store(Request $request){
        $email = Email::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->back();
    }
    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'message' => 'required',
        ]);
    
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'message' => $request->input('message')
        ];
    
        $email = new ContactFormEmail($data);
        Mail::to('amir.rai.pokhara@gmail.com')->send($email);
    
        return redirect()->back()->with('email_oki', 'Email sent successfully!');
    }

 
    
}
