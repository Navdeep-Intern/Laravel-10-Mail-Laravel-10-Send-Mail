<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    //
    public function index()
    {
        // Define the email data
        $mailData = [
            'title' => 'Mail from YourAppName',
            'body' => 'This is a test email sent using Laravel SMTP settings.'
        ];

        // Send the email
        Mail::to('recipient@example.com')->send(new DemoMail($mailData));
        
        // Return a response
        return response()->json(['message' => 'Email is sent successfully.']);
    }
}

