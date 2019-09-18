<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cover;

class CoversController extends Controller
{
    public function index()
    {
        return Cover::all();
    }

    public function show($id)
    {
        return Cover::find($id);
    }
}
