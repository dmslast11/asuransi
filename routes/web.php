<?php

use App\Http\Controllers\BayarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\profilecontroller;
use App\Http\Controllers\siswaController;

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



Route::resource('/siswa', SiswaController::class);

Route::resource('/payment', PembayaranController::class);

Route::group(['middleware' => ['auth', 'rolecek:admin']], function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
});

Route::group(['middleware' => ['auth', 'rolecek:siswa']], function (){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::post('/add', [PembayaranController::class, 'add']);

Route::get('/transaksi', [BayarController::class, 'index'])->name('transaksi');
Route::post('/check', [BayarController::class, 'check']);

Route::get('/',[LoginController::class, 'login'])->name('login');
Route::post('/postlogin',[LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::resource('profile',profilecontroller::class);
