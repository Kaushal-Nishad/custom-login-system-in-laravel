<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');
Route::get('/register', function () {
    return view('register');
});
Route::post('/add', [UserController::class, 'addUser'])->name('addUser');

Route::controller(LoginController::class)->group(function(){
Route::get('/login','showLoginForm')->name('user.login');
Route::post('/login','login')->name('login');
Route::post('/logout','logoutUser')->name('logout');
});