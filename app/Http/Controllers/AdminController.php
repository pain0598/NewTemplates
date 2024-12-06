<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    //

    public function index()
    {
        return view('dashboard');
    }

    public function sendEmail(Request $request)
    {
        // Prepare the data to be sent in the email
        $details = [
            'name' => "Tester Test",
            'email' => "test@gmail.com",
            'message' => "We are Very Sorry",
        ];

        // Send the email using the ContactUsMail mailable
        Mail::to('admin@yourdomain.com')->send(new ContactUsMail($details));

        // Redirect back with a success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
