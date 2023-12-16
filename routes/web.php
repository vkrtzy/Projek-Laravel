<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\navbar;
use App\Http\Controllers\LoginRegister;


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
    return view('index');
});
Route::get('/dokter', function () {
    return view('dokter');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/rujukan', function () {
    return view('rujukan');
});
Route::get('/auth/login', [LoginRegister::class, 'login'])->name('auth.login');
Route::get('/auth/register', [LoginRegister::class,'register'])->name('auth.register');

Route::get('/navbar', [navbar::class, 'showNavbar'])->name('navbar');

