<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use App\Mail\NewsletterSubscribed;

class NewslettersController extends Controller
{
    public function index()
    {
        return Newsletter::all();
    }

    public function show($id)
    {
        return Newsletter::find($id);
    }

    public function store(Request $request)
    {
        $this->validate(request(), Newsletter::STORE_RULES);
        $newsletter = new Newsletter();

        $newsletter->email = $request->input('email');

        $newsletter->save();
        
        \Mail::to($newsletter->email)->send(new NewsletterSubscribed($newsletter));
        return $newsletter;
    }
}
