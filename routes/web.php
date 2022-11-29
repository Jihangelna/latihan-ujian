<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Auth::routes();

Route::resource('kategori', KategoriController::class);
Route::get('hapkat/{kategori}', [KategoriController::class, 'destroy']);

Route::resource('produk', ProdukController::class);
Route::get('happrodk/{produk}', [ProdukController::class, 'destroy']);


Route::resource('post', PostController::class);
Route::get('happost/{post}', [PostController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
