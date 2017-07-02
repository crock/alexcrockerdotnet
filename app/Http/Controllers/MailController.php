<?php

namespace app\Http\Controllers;

use app\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(ContactFormRequest $request) {
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $message = $request->get('message');;
        $date = $request->get('dateSent');

        Mail::send('emails.contact', ['name' => $name, 'email' => $email, 'phone' => $phone, 'bodyMessage' => $message, 'date' => $date], function($data)
        {
            $data->from('alexcrocker@me.com', 'AlexCrocker.net');

            $data->to('alexcrocker@me.com', 'Alex Crocker')->subject('A site visitor has messaged you!');

        });
    }
}
