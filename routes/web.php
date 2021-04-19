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

//Authenticates routes
Auth::routes(['verify'=> true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin manage users routes
Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', UsersController::class, ['except' => ['show', 'create', 'store']]);
});

// Admin manage hotels
Route::prefix('admin')->name('admin.')->middleware('can:manage-hotels')->group(function () {
    Route::resource('/hotels', HotelsController::class, ['except' => ['show', 'create', 'store']]);
});

////Destination-Nhật
//    Route::get('/destinations', [Front\DestinationController::class, 'destinations']);
//List Hotel-Nhật
Route::get('/hotel', [Front\HotelController::class, 'index']);

//Destination-detail
Route::get('/destination-detail', function () {
    return view('destination-detail');
});

//Traveler Information
Route::get('/traveler', function () {
    return view('traveler-information');
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

//hotel routes
Route::prefix('hotel')->group(function () {
    Route::get('/{id}', [Front\HotelController::class, 'hotel']);
    Route::post('/{id}', [Front\HotelController::class, 'postComment']);
});

// destination routes
Route::get('/destinations', [Front\DestinationController::class, 'destinations']);
Route::prefix('destination')->group(function () {
    Route::get('/{id}', [Front\DestinationController::class, 'destinationDetail']);
});

//end vuong Routes






