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
//Home
Route::get('/', function () {
    return view('index');
});

//Destination
Route::get('/destination',function (){
    return view('destinations');
});

//Register
Route::get('/register',function (){
   return view('register');
});

//Sign In
Route::get('/signin',function (){
    return view('signin');
});

//About
Route::get('/about', function (){
    return view('about');
});

//Contact
Route::get('/contact',function (){
    return view('contact-us');
});

//Blog
Route::get('/blog',function (){
    return view('blog');
});

//List Hotel
Route::get('/listhotel',function (){
    return view('listhotel');
});

//Payment Information
Route::get('/payment-information',function (){
    return view('payment-information');
});

//Traveler information
Route::get('/traveler-information',function (){
    return view('traveler-information');
});
