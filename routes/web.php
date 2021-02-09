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


Route::get('/about', [\App\Http\Controllers\MainController::class, 'about'])->name('about');


Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');


Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'register'])->name('register');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store']);


Route::get('/sign_in_page', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/sign_in_page', [\App\Http\Controllers\LoginController::class, 'authenticated']);


Route::post('/logout', [\App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');


//testing bcc code
Route::get('/pay_one', [\App\Http\Controllers\PaymentsController::class, 'pay1'])->name('p1');
Route::get('/pay_two', [\App\Http\Controllers\PaymentsController::class, 'pay2'])->name('p2');

//Route::get('/about/{id}/{name}', function ($id, $name) {
//    return view('about');
//});

