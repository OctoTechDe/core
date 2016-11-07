<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Authentification routes
Auth::routes();

// Main route
Route::get('/{subs?}', function() {
    return view('layouts.backend');
    })
    // Middleware
    ->middleware('auth')
    // Redirect subroutes 
    ->where(['subs' => '.*']);