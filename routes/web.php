<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginCon;
use App\Http\Controllers\DashboardCon;
use App\Http\Controllers\RegisCon;
use App\Http\Controllers\pembeliancon;
use App\Http\Controllers\Produkcon;
use App\Http\Controllers\usercon;
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
Route::get('/', [ProdukCon::class, 'home'])->name('homeproduk');

Route::get('/login', [LoginCon::class, 'login'])->name('login');
Route::post('actionlogin', [LoginCon::class, 'actionlogin'])->name('actionlogin');
Route::get('dashboard', [DashboardCon::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('actionlogout', [LoginCon::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('register', [RegiSCon::class, 'register'])->name('register');
Route::post('register/action', [RegiSCon::class, 'actionregister'])->name('actionregister');

Route::get('/user/tampil', [usercon::class, 'index'])->name('indexUser')->middleware('auth');
Route::get('/user/input', [usercon::class, 'input'])->name('inputUser')->middleware('auth');
Route::post('/user/storeinput', [usercon::class, 'storeinput'])->name('storeInputUser')->middleware('auth');
Route::get('/user/update/{id}', [usercon::class, 'update'])->name('updateUser')->middleware('auth');
Route::post('/user/storeupdate', [usercon::class, 'storeupdate'])->name('storeUpdateUser')->middleware('auth');
Route::get('/user/delete/{id}', [usercon::class, 'delete'])->name('deleteUser')->middleware('auth');

Route::get('/produk/tampil', [Produkcon::class, 'index'])->name('indexproduk')->middleware('auth');
Route::get('/produk/input', [Produkcon::class, 'input'])->name('inputproduk')->middleware('auth');
Route::post('/produk/storeinput', [Produkcon::class, 'storeinput'])->name('storeInputproduk')->middleware('auth');
Route::get('/produk/update/{id}', [Produkcon::class, 'update'])->name('updateproduk')->middleware('auth');
Route::post('/produk/storeupdate', [Produkcon::class, 'storeupdate'])->name('storeUpdateproduk')->middleware('auth');
Route::get('/produk/delete/{id}', [Produkcon::class, 'delete'])->name('deleteproduk')->middleware('auth');
Route::get('/produk/upload', [Produkcon::class, 'upload'])->name('upload')->middleware('auth');
Route::post('/produk/uploadproses', [produkCon::class, 'uploadproses'])->name('uploadproses')->middleware('auth');

Route::get('/pembelian/tampil', [pembeliancon::class, 'index'])->name('indexpembelian')->middleware('auth');
Route::get('/pembelian/input', [pembeliancon::class, 'input'])->name('inputpembelian')->middleware('auth');
Route::post('/pembelian/storeinput', [pembeliancon::class, 'storeinput'])->name('storeInputpembelian')->middleware('auth');
Route::get('/pembelian/update/{id}', [pembeliancon::class, 'update'])->name('updatepembelian')->middleware('auth');
Route::post('/pembelian/storeupdate', [pembeliancon::class, 'storeupdate'])->name('storeUpdatepembelian')->middleware('auth');
Route::get('/pembelian/delete/{id}', [pembeliancon::class, 'delete'])->name('deletepembelian')->middleware('auth');