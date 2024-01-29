<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\profilecontroller;
use App\Http\Controllers\siswaController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/login', function () {
    return view('master');
});

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/home', [DashboardController::class, 'index'])->name('home');

Route::resource('/siswa', SiswaController::class);

Route::resource('/payment', PembayaranController::class);

Route::get('/login',[loginController::class, 'index'])->middleware('guest');
Route::post('/logout',[LoginController::class, 'logout']);
Route::post('/login',[loginController::class, 'authenticate']);
Route::get('/register',[registerController::class, 'index']);
Route::post('/register',[registerController::class, 'store']);

Route::resource('profile',profilecontroller::class);
