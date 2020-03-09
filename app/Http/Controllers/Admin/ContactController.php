<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
    	$contacts = Contact::all();
    	return view('admin.contact.index',compact('contacts'));

    }
    public function show($id)
    {
    	$contact = Contact::find($id);
    	return view('admin.contact.show',compact('contact'));

    }

    public function destroy($id)
    {
    	$contact = Contact::find($id);
    	$contact->delete();
    	Toastr::success('Reservation successfully Deleted','Success',["positionClass" =>  "toast-top-right"]);
    	return redirect()->back();

    }
}
