<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::controller(AuthController::class)->group(function (){
    Route::get('/login','login')->name('login');
    Route::post('/login','store');
});

Route::prefix('penumpang')->group(function() {
    Route::get('/', [HomeController::class, 'index']);
})->middleware('auth');

Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index']);
})->middleware('auth');

Route::controller(AuthController::class)->group(function (){
    Route::get('/login','login')->name('login');
    Route::post('/login','proccesLogin');
});