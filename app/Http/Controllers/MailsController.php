<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;
use App\Mail\MailRecieved;

class MailsController extends Controller
{
    public function index()
    {
        return Mail::all();
    }

    public function show($id)
    {
        return Mail::find($id);
    }

    public function store(Request $request)
    {
        $this->validate(request(), Mail::STORE_RULES);
        $mail = new Mail();

        $mail->name = $request->input('name');
        $mail->email = $request->input('email');
        $mail->subject = $request->input('subject');
        $mail->message = $request->input('message');

        $mail->save();
        
        \Mail::to('uniquorn.design@gmail.com')->send(new MailRecieved($mail));
        return $mail;
    }

}
