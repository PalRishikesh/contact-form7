<?php

// namespace App\Http\Controllers;

namespace Rishi\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Rishi\Contact\Mail\ContactMailable;
use Rishi\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-form::contact');
    }

    public function send(Request $request)
    {
        // return $request->all();
        // Contact::created($request->all());
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        $contact = new Contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();

        return redirect(route('contact-form'));

    }
}
