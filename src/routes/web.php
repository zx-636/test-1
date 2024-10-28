<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index']);
Route::get('/login', [App\Http\Controllers\LoginController::class, 'login']);
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin']);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact']);
Route::get('/confirm', [App\Http\Controllers\ConfirmController::class, 'confirm']);
Route::get('/thanks', [App\Http\Controllers\ThanksController::class, 'thanks']);