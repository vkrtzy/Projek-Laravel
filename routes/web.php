<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DokterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\navbar;
use App\Http\Controllers\LoginRegister;
use App\Models\dokter;
use App\Models\layanan;


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

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/auth/login', [LoginRegister::class, 'login'])->name('auth.login');
    Route::get('/auth/register', [LoginRegister::class,'register'])->name('auth.register');
});

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegister::class,'adminHome'])->name('admin.home');
    Route::get('/admin/tambah', [LoginRegister::class,'adminTambah'])->name('admin.tambah');
    Route::get('/admin/editDokter/{id}', [adminController::class,'editDokter'])->name('admin.editDokter');
    Route::get('/admin/deleteDokter/{id}', [adminController::class,'deleteDokter'])->name('admin.deleteDokter');
    Route::get('/admin/deleteLayanan/{id}', [adminController::class,'deleteLayanan'])->name('admin.deleteLayanan');
    Route::get('/admin/deleteUser/{id}', [adminController::class,'deleteUser'])->name('admin.deleteUser');
    Route::get('/admin/tambahLayanan', [adminController::class,'adminTambahLayanan'])->name('admin.tambahLayanan');
    Route::get('/admin/dokter', [adminController::class,'admindokter'])->name('admin.dokter');
    Route::get('/admin/services', [adminController::class,'adminservices'])->name('admin.services');
    Route::get('/admin/rujukan', [adminController::class,'adminrujukan'])->name('admin.rujukan');
    Route::get('/admin/terimaRujukan/{id}', [adminController::class,'adminTerimaRujukan'])->name('admin.terimaRujukan');
    Route::get('/admin/stats', [adminController::class,'adminStats'])->name('admin.stats');
});

Route::post('/tambahDokter', [adminController::class,'postTambahDokter'])->name('postTambahDokter');
Route::post('/tambahLayanan', [adminController::class,'postTambahLayanan'])->name('postTambahLayanan');
Route::post('/postEditDokter/{id}', [adminController::class,'postEditDokter'])->name('postEditDokter');
Route::post('/postEditUser/{id}', [adminController::class,'postEditUser'])->name('postEditUser');
Route::post('/postSudahDiterima/{id}', [adminController::class,'postSudahDiterima'])->name('postSudahDiterima');
Route::get('/admin/home', [adminController::class,'homeAdmin'])->name('admin.home');

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/home', [LoginRegister::class,'userHome'])->name('user.home');
    Route::get('/user/rujukan', [adminController::class,'userrujukan'])->name('user.rujukan');
    Route::get('/user/dokter', [adminController::class,'userdokter'])->name('user.dokter');
    Route::get('/user/services', [adminController::class,'userservices'])->name('user.services');
    Route::get('/user/hasilRujukan', [adminController::class,'hasilRujukan'])->name('user.hasilRujukan');
    Route::get('/user/cetakRujukan/{id}', [adminController::class,'cetakDataRujukan'])->name('user.cetakRujukan');
});

Route::POST('/postRegister', [LoginRegister::class,'postRegister'])->name('postRegister');
Route::post('/postLogin', [LoginRegister::class,'postLogin'])->name('postLogin');
Route::get('/logout', [LoginRegister::class,'logout'])->name('logout'); 

Route::post('/postTambahRujukan', [AdminController::class, 'postTambahRujukan'])->name('postTambahRujukan');
Route::post('/postTerimaRujukan', [AdminController::class, 'postTerimaRujukan'])->name('postTerimaRujukan');

Route::get('/navbar', [navbar::class, 'showNavbar'])->name('navbar');
Route::get('/dokter', function () {
    $dokter = Dokter::get();
    return view('dokter', compact('dokter'));
});
Route::get('/services', function () {
    $data = layanan::get();
    return view('services', compact('data'));
});
Route::get('/rujukan', function () {
    return view('rujukan');
});