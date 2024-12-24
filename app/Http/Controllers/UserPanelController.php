<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUsHanlding;
use Illuminate\Support\Facades\Response;

class UserPanelController extends Controller
{
    //

    public function index(){
        return view('users.pages.home');
    }

    public function contactUs(){
        return view('users.pages.contact-us');
    }

    public function contactUsSubmit(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Step 2: Insert the form data into the 'contact_us_reverts' table
        $contactUs = ContactUsHanlding::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Step 3: Fire the WebSocket event to notify the admin
        // event(new ContactUsSubmitted($contactUs));

        // Step 4: Return a success response (you can also redirect)
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Your message has been sent successfully!',
        //     'data' => $contactUs
        // ]);
        return Response::make('', 200);
    }


    public function tabView(){
        return view('users.tabview');
    }
}
