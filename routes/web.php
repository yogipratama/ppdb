<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendaftaranController;
use App\Models\Pendaftaran;
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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/registrasi', [AuthController::class, 'registrasi'])->name('register');
Route::post('/proses_registrasi', [AuthController::class, 'proses_registrasi'])->name('register.post');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/admin', function () {
            return view('pages.admin.dashboard');
        });
        Route::get('/pendaftaran-admin', [PendaftaranController::class, 'view_data_formulir'])->name('pendaftaran.admin');
    });
    Route::group(['middleware' => ['cek_login:siswa']], function () {
        Route::resource('pendaftaran', PendaftaranController::class);
        Route::get('/siswa', [PendaftaranController::class, 'view_dashboard'])->name('dashboard');

    });
});

