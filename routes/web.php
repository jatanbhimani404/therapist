<?php


use App\Http\Controllers\Client\ChatbotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.home');
});

Route::get('chat', function () {
    return view('chat.index');
});

Route::get('chat-1', function () {
    return view('chat.index1');
});

Route::prefix('chat')->name('chat.')->group(function () {
    Route::get('/', function () {
        return view('chat.index');
    });

    Route::get('1', function () {
        return view('chat.index1');
    });

    Route::get('2', function () {
        return view('chat.index2');
    });

    Route::post('prompt', [ChatbotController::class, 'chat'])->name('prompt');
});

Route::prefix('client')->name('client.')->group(function () {
    Route::get('login', function () {
        return view('clients.auth.login');
    })->name('login');

    Route::get('sign-up', function () {
        return view('clients.auth.signup');
    })->name('signup');

    Route::get('dashboard', function () {
        return view('clients.dashboard.index');
    });

    Route::get('profile', function() {
        return view('clients.profile.index');
    });

    Route::get('billing-payments', function() {
        return view('clients.billing.index');
    });
});
