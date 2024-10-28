<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function admin()
    {
        return view('auth.admin'); // 修正: 'admin' に変更
    }
}
