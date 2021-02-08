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

Route::get('/sign_in_page', [\App\Http\Controllers\RegisterController::class, 'sign_in'])->name('sign_in');

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'register'])->name('register');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store']);

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticated']);

//Route::get('/about/{id}/{name}', function ($id, $name) {
//    return view('about');
//});

