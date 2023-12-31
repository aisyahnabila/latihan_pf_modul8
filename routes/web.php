<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

// Welcome Default
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Route::middleware(['auth'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
//     Route::get('profile', [ProfileController::class,])->name('profile');
//     Route::resource('employees', EmployeeController::class);
// });

// Home Controller
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Profile Controller
Route::get('/profile', ProfileController::class)->name('profile');

// Employee Controller
Route::resource('employees', EmployeeController::class);


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');