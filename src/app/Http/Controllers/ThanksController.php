<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function thanks()
    {
        return view('auth.thanks');
    }
}
