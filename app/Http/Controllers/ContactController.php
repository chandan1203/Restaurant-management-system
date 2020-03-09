<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Contact;

class ContactController extends Controller
{
    public function SendMessage(Request $request)
    {
    	$this->validate($request,[

    		'name' => 'required',
    		'email' => 'required',
    		'subject' => 'required',
    		'message' => 'required'


    	]);

    	$contact = new Contact();

    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->subject = $request->subject;
    	$contact->message = $request->message;
    	$contact->save();

    	Toastr::success('Message successfully sent','Success',["positionClass" =>  "toast-top-right"]);
    	return redirect()->back();

    }
}
