<?php

use App\Http\Controllers\SMSServiceTestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sms',[SMSServiceTestController::class,'index']);
