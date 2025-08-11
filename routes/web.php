<?php

use App\Http\Controllers\ChatbotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('chat', function() {
    return view('chat.index');
});

Route::get('chat-1', function() {
    return view('chat.index1');
});

Route::prefix('chat')->name('chat.')->group(function() {
     Route::get('/', function() {
        return view('chat.index');
    });

    Route::get('1', function() {
        return view('chat.index1');
    });

     Route::get('2', function() {
        return view('chat.index2');
    });

    Route::post('prompt', [ChatbotController::class, 'chat'])->name('prompt');
});

Route::get('login', function () {
    return view('auth.login');
});
