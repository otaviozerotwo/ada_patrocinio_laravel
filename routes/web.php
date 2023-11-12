<?php

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
    return view('home.index');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/login', [UserController::class, 'index'])->name('User.index');
    Route::post('/auth', [UserController::class, 'auth'])->name('auth.user');
    Route::get('/cadastro', [UserController::class,'create'])->name('create.user');
});