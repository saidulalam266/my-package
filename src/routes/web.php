<?php

use Illuminate\Support\Facades\Route;
use Saidul\Contact\Http\Controllers\ContactController;
/////
Route::get('/show-form', [ContactController::class, 'showForm']);
Route::post('/send-mail', [ContactController::class, 'sendMail']);
