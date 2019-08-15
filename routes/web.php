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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Secure routes
Route::get('/secure/sqli/{id}', 'SecureController@sqli')->name('secure.sqli');
Route::get('/secure/policy/{post}', 'SecureController@policy')->name('secure.policy');

// Vulnerable routes
Route::get('/vulnerable/sqli/{id}', 'VulnerableController@sqli')->name('vulnerable.sqli');
Route::get('/vulnerable/policy/{post}', 'VulnerableController@policy')->name('vulnerable.policy');
