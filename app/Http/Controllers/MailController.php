<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Booking;

class MailController extends Controller
{
    public function sendAndSaveBookingEmail(Request $request) {

        $verifiedData = $request->validate([
            'name' => 'bail|required|string',
            'email' => 'bail|required|email',
            'message' => 'bail|required|string',
            'service' => 'bail|required',
            'phone_number' => 'bail|required||regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
        ]);

        //  Store data in database
        Form::create($request->all());

        $email = 'positronx@gmail.com';

        $mailData = [
            'title' => 'Demo Email',
            'url' => 'https://www.positronx.io'
        ];

        Mail::to($email)->send(new Booking($mailData));

        return response()->json([
            'message' => 'Email has been sent.'
        ], Response::HTTP_OK);
    }
}
