<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $fillable = [
        'name', 'email', 'subject', 'message'
    ];

    const STORE_RULES = [
        'name' => 'required|min:2', 
        'email' => 'required|email', 
        'subject' => 'required|min:2', 
        'message' => 'required|min:10'
    ];
}
