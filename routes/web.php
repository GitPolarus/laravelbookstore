<?php

use App\Http\Controllers\admin\Home;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Greeting;
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

Route::view('/', "Welcome")->name('home');

Route::get('/login', [Auth::class, 'displayLogin'])->name('login');
Route::get('/register', [Auth::class, 'displayRegister'])->name('register');

Route::get('/admin', [Home::class, 'displayHome'])->name('admin.home');