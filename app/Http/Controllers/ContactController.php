<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){

        return view('Pages.Contact Us.contact');
    }

    public function store(Request $request){

        $data=$request->validate([

            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);

        Mail::to('kobylike2@gmail.com')->send(new Contact($data));

        return redirect(route('contact.index'))->with('success','Thanks ,we will get in touch');
    }
}
