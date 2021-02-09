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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('home');
Route::get('/services', [\App\Http\Controllers\MainController::class, 'services'])->name('services');
Route::get('/products', [\App\Http\Controllers\MainController::class, 'products'])->name('products');
Route::get('/about', [\App\Http\Controllers\MainController::class, 'about'])->name('about');


Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'register'])->name('register');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store']);


Route::get('/sign_in_page', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/sign_in_page', [\App\Http\Controllers\LoginController::class, 'authenticated']);


Route::post('/logout', [\App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');

Route::get('/book', [\App\Http\Controllers\BookingController::class, 'book'])->name('book')->middleware('auth');


//testing bcc code
Route::get('/pay_one', [\App\Http\Controllers\PaymentController::class, 'pay1'])->name('p1')->middleware('auth');
Route::post('/pay_two', [\App\Http\Controllers\PaymentController::class, 'pay2'])->name('p2')->middleware('auth');

//Route::get('/about/{id}/{name}', function ($id, $name) {
//    return view('about');
//});

