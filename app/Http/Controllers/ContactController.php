<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{

    public function showForm()
    {
        return view('contact.form');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Save the data to the database
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        // Send email (similar to previous example)
         // Send email (you can customize this part based on your needs)
        Mail::send('emails.contact', ['request' => $request], function ($message) use ($request) {
            $message->to('your@email.com')
                ->subject('New Contact Form Submission');
        });

        return redirect()->route('contact.form')->with('success', 'Your message has been sent successfully!');
    }
}
