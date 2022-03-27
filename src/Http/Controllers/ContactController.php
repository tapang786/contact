<?php

namespace Inditech\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inditech\Contact\Mail\ContactMailable;
use Inditech\Contact\Models\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        # code...
        Mail::to(config('contact.send_mail_to', 'tapang786@gmail.com'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
