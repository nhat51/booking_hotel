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

<<<<<<< Updated upstream
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
=======
////Register-Nhật
//    Route::get('/register', function () {
//        return view('register');
//    });
//
////Sign In-Nhật
//    Route::get('/signin', function () {
//        return view('login');
//    });
>>>>>>> Stashed changes

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
    Route::get('/listhotel',[Front\HomeController::class,'listhotel']);

//Payment Information-Nhật
    Route::get('/payment', function () {
        return view('payment');
    });

//Traveler information
    Route::get('/traveler-information', function () {
        return view('traveler-information');
    });

    //vuong routes
    Route::get('/hotel/{id}', [Front\HotelController::class, 'hotel']);
    Route::post('/hotel/{id}', [Front\HotelController::class, 'postComment']);
//resgister - vuong
    Route::get('/register', 'Auth\RegisterController@getRegister');
    Route::post('/register', 'Auth\RegisterController@postRegister');
// Login - vuong
Route::get('/login', [ 'as' => 'login', 'user' => 'Auth\LoginController@getLogin']);
Route::post('/login', [ 'as' => 'login', 'user' => 'Auth\LoginController@postLogin']);

// logout - vuong
Route::get('logout', [ 'as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);
