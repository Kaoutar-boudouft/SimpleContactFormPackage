<?php

namespace Bitfumes\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Bitfumes\Contact\Mail\ContactMailable;
use Bitfumes\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    //return contact view
    function index(){
        return view("contact::contact");
    }

    //send msg
    function send(Request $request){
        Contact::create($request->all());
        config(['MAIL_FROM_ADDRESS' => $request->email]);
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->first_name,$request->last_name));
        return redirect('contact')/*->withMessage('We received your email ! thank you we will replay soon as possible !')*/;
    }
}
