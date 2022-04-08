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
            'email' => 'required',
            'name' => 'required',
            'message' => 'required',
        ]);
        $message = Message::create($request->all());

        //Mail
        Mail::to('boz.mailforward@gmail.com')->send(new ContactMail($message));
        //Gmail development account login email: boz.mailforward@gmail.com ww: ZJukqZ8HKzi7aMZ

        return view('contact')->with('success', 'Bericht verzonden');
    }
}
