<?php

use Illuminate\Support\Facades\Route;

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

//redirects the user to the registration form when entering the website
Route::get('/', function (){
    return redirect('/register');
});

Route::get('/secure', 'UserDetailsController@index');

//When the user logs out it redirects them to the registration page
Route::get('logout', function() {
    Auth::logout();
    return redirect('/');
});

//defines all the routes for laravels login system
Auth::routes();

//The first page the user sees when they login
Route::get('/home', 'HomeController@index')->name('home');
