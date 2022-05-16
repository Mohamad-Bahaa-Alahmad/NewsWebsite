<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessiesController;
use App\Http\Controllers\ContactController;

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


Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');



Route::get('about', [HomeController::class, 'about'])->name('about');



Auth::routes();

//  User Routes

Route::resource('admin', UserController::class);


//  News Routes
Route::resource('news', NewsController::class);


//  Sessies Routes

Route::resource('sessie', SessiesController::class);


//  Contact Routes

Route::get('contactus', [ContactController::class, 'getContact'])->name('getContact');
Route::post('contactus', [ContactController::class, 'saveContact'])->name('saveContact');












