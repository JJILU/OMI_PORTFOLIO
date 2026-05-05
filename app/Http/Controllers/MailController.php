<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CvMail;

class MailController extends Controller
{
    public function contact() {
        return view('emails.contact');
    }
    public function send(Request $request)
    {
        // 1. Validate form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // 2. Store data
        $data = [
            "name_of_sender" => $request->name,
            "email_of_sender" => $request->email,
            "subject_of_email" => $request->subject,
            "message_of_interview" => $request->message
        ];

        // 3. Send email
        try {
            Mail::to("walu9963@gmail.com")->send(new CvMail($data));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        // 4. Redirect with success message
        // return redirect()->route("portfolio.index")->with("success","Email sent successfully");
        return redirect()->route("email.showContact")->with("success","Email sent successfully");
    }
}
