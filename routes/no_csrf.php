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
Route::post('/secure/validation', 'SecureController@validation')->name('secure.validation');

// Vulnerable
Route::post('/vulnerable/validation', 'VulnerableController@validation')->name('vulnerable.validation');
