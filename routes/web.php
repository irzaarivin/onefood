<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\RestaurantController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(HomeController::class)->group(function(){

    Route::get('/', 'index');
    Route::get('/home', 'index');
    Route::get('/home/', 'index');

    Route::get('/about', 'about');
    Route::get('/about/', 'about');

    Route::get('/privacy-policy', 'pripo');
    Route::get('/privacy-policy/', 'pripo');

    Route::get('/terms-of-service', 'terofserv');
    Route::get('/terms-of-service/', 'terofserv');

    Route::get('/dashboard', 'dashboard')->middleware('verified');
    Route::get('/dashboard/', 'dashboard')->middleware('verified');

});

Route::controller(FoodController::class)->group(function(){

    Route::get('/foods', 'index')->middleware('verified');
    Route::get('/foods/', 'index')->middleware('verified');

    Route::get('/foods/{food:slug}', 'show')->middleware('verified');
    Route::get('/foods/{food:slug}/', 'show')->middleware('verified');

    Route::get('/checkout', 'checkoutFood')->middleware('verified')->name('generate.barcode');

    Route::post('/deleteCart', 'deleteCart');

    Route::post('/checkout', 'successfully');

});

Route::controller(RestaurantController::class)->group(function(){

    Route::get('/restaurants', 'index');
    Route::get('/restaurants/', 'index');

    Route::post('/add-cart', 'addCart');

    Route::post('/confirm-checkout', 'checkoutCart');

});

Route::middleware('guest')->group(function(){

    Route::controller(RegisterController::class)->group(function(){

        Route::get('/register', 'index')->name('register');
        Route::get('/register/', 'index')->name('register');

    });

    Route::controller(LoginController::class)->group(function(){

        Route::get('/login', 'index')->name('login');
        Route::get('/login/', 'index')->name('login');

        Route::get('/forgot-password', 'forgotPassword')->name('password.reset');
        Route::get('/reset-password', 'resetPassword')->name('password.reset');

    });

});

Route::controller(LoginController::class)->group(function(){

    Route::post('/logout', 'logout')->middleware('auth');
    Route::get('/email/verify', 'verify')->middleware('auth')->name('verification.notice');

});





