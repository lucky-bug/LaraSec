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

Route::post('/authenticate', 'SecureController@authenticate')->name('secure.authenticate');

// Secure
Route::post('/secure/validation1', 'SecureController@validation1')->name('secure.validation1');
Route::post('/secure/validation2', 'SecureController@validation2')->name('secure.validation2');

// Vulnerable
Route::post('/vulnerable/validation', 'VulnerableController@validation')->name('vulnerable.validation');
