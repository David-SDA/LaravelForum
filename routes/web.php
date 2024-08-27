<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('home');
});

Route::post('/logout', [LogoutController::class, 'destroy'])->middleware('auth');

Route::prefix('/register')->name('register.')->controller(RegisterController::class)->group(function (){
    Route::get('/', 'create')->middleware('guest')->name('create');

    Route::post('/', 'store')->middleware('guest')->name('store');
});

Route::prefix('/login')->name('login.')->controller(LoginController::class)->group(function (){
    Route::get('/', 'create')->middleware('guest')->name('create');

    Route::post('/', 'login')->middleware('guest')->name('store');
});

Route::prefix('/topic')->name('topic.')->controller(TopicController::class)->group(function (){
    Route::get('/', 'index')->name('index');

    Route::get('/{slug}-{id}', 'show')->where([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ])->name('show');
});