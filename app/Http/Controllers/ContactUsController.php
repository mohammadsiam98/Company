<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
class ContactUsController extends Controller
{
    //
    public function contact()
    {
        return view('pages.contact.contactUs');
    }

    public function list()
    {
        //
        $ContactUsDetails = ContactUs::all();
        return view ('pages.contact.list',compact('ContactUsDetails'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);
        $ContactUsDetails = new ContactUs;
        $ContactUsDetails->name = $request->name;
        $ContactUsDetails->email = $request->email;
        $ContactUsDetails->number = $request->number;
        $ContactUsDetails->message = $request->message;

        $ContactUsDetails->save();
        return redirect()->route('contact','/#contact')->with('success', 'Message has been sent successfully');
    }

}
