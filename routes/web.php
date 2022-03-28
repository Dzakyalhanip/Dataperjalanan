<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;





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
    return view('auth.login');
});

Auth::routes();

Route::resource('login',LoginController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin', function () { return view('admin.admin'); })->middleware('checkRole:admin');
Route::get('user', function () { return view('user.user'); })->middleware(['checkRole:user,admin']);

// admin
// Route::get('admin.data', function () { return view('admin.table'); })->name('admin');
Route::get('/admin',[AdminController::class,'index'])->name('admin');   
Route::get('/admin.data',[AdminController::class,'data'])->name('data');   
Route::delete('/hapus{id}',[AdminController::class,'delete']);
Route::put('/update/{id}',[AdminController::class,'update'])->name('update');
Route::get('edit/{id}',[AdminController::class,'edit'])->name('edit');





// user
Route::get('/user.form',[UserController::class,'tambah'])->name('tambahdata');   
Route::post('/user.put',[UserController::class,'simpan'])->name('simpan');
Route::get('/user.table',[UserController::class,'index'])->name('userdata');

Route::get('/user.gambar',[GambarController::class,'show'])->name('usergambar');
Route::post('/user.img',[GambarController::class,'simpan'])->name('simpangambar');
Route::get('user',[GambarController::class,'index'])->name('user');







