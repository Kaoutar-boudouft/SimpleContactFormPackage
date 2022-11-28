<?php

namespace Bitfumes\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //return contact view
    function index(){
        return view("contact::contact");
    }

    //send msg
    function send(Request $request){
        return $request->all();
    }
}
