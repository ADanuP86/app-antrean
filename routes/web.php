<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

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

Route::get('/', [Home::class, 'index']);

Route::get('/tambah1', [Home::class, 'tambah1']);

Route::get('/tambah2', [Home::class, 'tambah2']);

Route::post('/store1', [Home::class, 'store1']);

Route::post('/store2', [Home::class, 'store2']);

Route::get('/edit1/{id}', [Home::class, 'edit1']);

Route::get('/edit2/{id}', [Home::class, 'edit2']);

Route::post('/update1', [Home::class, 'update1']);

Route::post('/update2', [Home::class, 'update2']);

Route::get('/hapus1/{id}', [Home::class, 'hapus1']);

Route::get('/hapus2/{id}', [Home::class, 'hapus2']);

Route::get('/teller1', [Home::class, 'teller1']);

Route::get('/panggil1/{id}', [Home::class, 'panggil1']);

Route::get('/panggil2/{id}', [Home::class, 'panggil2']);

Route::get('/teller2', [Home::class, 'teller2']);
