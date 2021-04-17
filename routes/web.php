<?php

use App\Http\Controllers\Admin\HotelsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Front;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index']);

////Destination-Nhật
//    Route::get('/destinations', [Front\DestinationController::class, 'destinations']);
//List Hotel-Nhật
Route::get('/hotel',[Front\HotelController::class,'index']);

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
////Register-Nhật
//    Route::get('/register', function () {
//        return view('register');
//    });
//
////Sign In-Nhật
    Route::get('/signin', function () {
        return view('login');
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



//Payment Information-Nhật
    Route::get('/payment', function () {
        return view('payment');
    });

//Traveler information
    Route::get('/traveler-information', function () {
        return view('traveler-information');
    });

    //vuong routes
    Route::prefix('hotel')->group(function (){
        Route::get('/{id}', [Front\HotelController::class, 'hotel']);
        Route::post('/{id}', [Front\HotelController::class, 'postComment']);
    });
    Route::get('/destinations', [Front\DestinationController::class, 'destinations']);
    Route::get('/destinations/{id}', [Front\DestinationController::class, 'destinationDetail']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->name('admin.')->middleware(['can:manage-users', 'can:manage-hotels'])->group(function (){
    Route::resource('/users', UsersController::class, ['except'=>['show', 'create', 'store']]);
    Route::resource('/hotels', HotelsController::class, ['except'=>['show', 'create', 'store']]);
});
//end vuong Routes


//User Sign Up and Sign In
//Route::get('/user/login', [UsersController::class, 'login'])->name('user.login');
//Route::get('/user/register', [UsersController::class, 'register'])->name('user.register');
//Route::post('/user/save', [UsersController::class, 'save'])->name('user.save');
//Route::post('/user/check', [UsersController::class, 'check'])->name('user.check');

// Chưa có temp
//Route::get('/admin/dashboard', [UsersController::class, 'dashboard'])->name('user.dashboard');





