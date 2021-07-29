<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index()
    {

        return view('guests.welcome');
    }


    public function  about()
    {
        return view('guests.about');
        
    }


    public function contacts()
    {
        return view('guests.contacts');
        
    }


    public function sendContactForm(Request $request)
    {
        $validatedData = $request->validate([
                "full_name" => "required",
                "email" => "required | email",
                "message" => "required",
            ]);


    //         Mail::to("admin@ex.com")->send(new ContactFormMail($validatedData));
    //         return redirect()->back()->with('message', 'Success!!!');
     }
    
}
