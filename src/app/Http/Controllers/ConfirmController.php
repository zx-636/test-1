<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    public function confirm()
    {
        return view('auth.confirm');
    }
}
