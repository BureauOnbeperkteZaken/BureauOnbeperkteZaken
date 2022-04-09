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
        if ( !filter_var(($request-> email), FILTER_VALIDATE_EMAIL) ){
            return view('contact')->with('fail', 'Email niet geldig');
        }
        if ( strlen($request-> message) > 500 ){
            return view('contact')->with('fail', 'Bericht te lang');
        }
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

    function checkEmail($email) {
        $find1 = strpos($email, '@');
        $find2 = strpos($email, '.');
        return ($find1 !== false && $find2 !== false && $find2 > $find1);
    }
}
