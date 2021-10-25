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
        return view ('pages.CRUD_contactUs.list',compact('ContactUsDetails'));
    }


    public function store(Request $request)
    {
        $ContactUsDetails = new ContactUs;
        $ContactUsDetails->name = $request->name;
        $ContactUsDetails->email = $request->email;
        $ContactUsDetails->number = $request->number;
        $ContactUsDetails->message = $request->message;

        $ContactUsDetails->save();
        return redirect()->back();
    }

}
