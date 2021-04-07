<?php

use App\Http\Controllers\Front;
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


    Route::get('/', [Front\HomeController::class, 'index']);

//Destination-Nhật
    Route::get('/destinations', [Front\DestinationController::class, 'destinations']);

//Destination-detail
    Route::get('/destination-detail',function (){
        return view('destination-detail');
    });

//Traveler Information
    Route::get('/traveler',function (){
        return view('traveler-information');
    });

//Register-Nhật
    Route::get('/register', function () {
        return view('register');
    });

//Sign In-Nhật
    Route::get('/signin', function () {
        return view('signin');
    });

//About-Nhật
    Route::get('/about', function () {
        return view('about');
    });

//Contact-Nhật
    Route::get('/contact', function () {
        return view('contact-us');
    });

//Blog-Nhật
    Route::get('/blog', function () {
        return view('blog');
    });

//List Hotel-Nhật
    Route::get('/listhotel', function () {
        return view('listhotel');
    });

//Payment Information-Nhật
    Route::get('/payment', function () {
        return view('payment');
    });

//Traveler information
    Route::get('/traveler-information', function () {
        return view('traveler-information');
    });

    //vuong routes
    Route::get('/hotel/{id}', [Front\HotelController::class, 'list']);

