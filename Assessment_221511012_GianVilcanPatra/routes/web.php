<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\TenanController;
use App\Http\Controllers\BarangController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/tampilanawal', function () {
    return view('nav');
});

Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
Route::get('/deletebarang/{id}',[BarangController::class, 'delete'])->name('delete');

Route::get('/kasir/create', [KasirController::class, 'create'])->name('kasir.create');
Route::post('/kasir', [KasirController::class, 'store'])->name('kasir.store');

Route::get('/tenan/create', [TenanController::class, 'create'])->name('tenan.create');
Route::post('/tenan', [TenanController::class, 'store'])->name('tenan.store');

Route::get('/nota', [NotaController::class, 'index'])->name('notaindex');

//update
// Route::put('/updatedatapendidikan/{id}',[BarangController::class, 'updatedatapendidikan'])->name('updatedata.pendidikan');
Route::get('/tampilbarang/{id}',[BarangController::class, 'tampilbarang'])->name('tampilbarang');
Route::post('/updatebarang/{id}',[BarangController::class, 'updatebarang'])->name('updatebarang');

// Route::get('/barang/index',[BarangController::class, 'index'])->name('barang.index');
