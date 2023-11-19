<?php

use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\HowToHelpController;
use App\Http\Controllers\TermsController;
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

Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('about', [AboutController::class,'index'])->name('about.index');
Route::get('contact', [ContactController::class,'index'])->name('contact.index');
Route::get('events', [EventsController::class,'index'])->name('events.index');
Route::get('howToHelp/voluntary', [HowToHelpController::class,'voluntary'])->name('howToHelp.voluntary');
Route::get('services/scheduleCastration', [ServicesController::class,'scheduleCastration'])->name('services.scheduleCastration');
Route::get('terms', [TermsController::class, 'index'])->name('terms.index');

Route::controller(UserController::class)->group(function () {
    Route::get('login', [UserController::class, 'index'])->name('login.index');
    Route::post('login', [UserController::class, 'auth'])->name('login.auth');
    Route::get('cadastro', [UserController::class,'create'])->name('cadastro.create');
    Route::post('cadastro', [UserController::class,'store'])->name('cadastro.store');
    Route::get('verify/{token}', [UserController::class,'verify'])->name('verify');
});

Route::get('adminPanel', [AuthController::class,'index'])->name('adminPanel.index');
Route::get('adminPanel/login', [AuthController::class,'login'])->name('adminPanel.login');
Route::post('adminPanel/login', [AuthController::class,'auth'])->name('adminPanel.auth');
Route::get('adminPanel/register', [AuthController::class,'create'])->name('adminPanel.register');
Route::post('adminPanel/register', [AuthController::class,'store'])->name('adminPanel.store');
Route::get('adminPanel/forgot-password', [AuthController::class,'forgot'])->name('adminPanel.forgot');
Route::post('adminPanel/forgot-password', [AuthController::class,'forgotPassword'])->name('adminPanel.forgot-password');

