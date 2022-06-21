<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function contact_index()
    {
        return view('contact');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact_store(Request $request)
    {
        //DB Store
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'message' => 'required|max:500',
        ]);
        $message = Message::create($request->all());

        //Mail
        Mail::to('bureau.onbeperkte.zaken@gmail.com')->send(new ContactMail($message));

        return view('contact')->with('success', 'Bericht verzonden');
    }
}
