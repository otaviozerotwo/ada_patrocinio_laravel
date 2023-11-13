<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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
    Route::get('login', [UserController::class, 'index'])->name('login.index');
    Route::post('login', [UserController::class, 'auth'])->name('login.auth');
    Route::get('cadastro', [UserController::class,'create'])->name('cadastro.create');
    Route::post('cadastro', [UserController::class,'store'])->name('cadastro.store');
    Route::get('verify/{token}', [UserController::class,'verify'])->name('verify');
});

Route::get('adminPanel', [AuthController::class,'index'])->name('adminPanel.index');
Route::get('adminPanel/login', [AuthController::class,'login'])->name('adminPanel.login');
Route::get('adminPanel/register', [AuthController::class,'register'])->name('adminPanel.register');
Route::get('adminPanel/forgot-password', [AuthController::class,'forgot'])->name('adminPanel.forgot-password');

