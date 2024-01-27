<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [BarangController::class, 'index'])->name('home');
Route::get('/detail/{log}', [BarangController::class, 'detail'])->name('detail');

Route::post('/add_log', [BarangController::class, 'store']);
Route::delete('/delete_log/{id}', [BarangController::class, 'delete']);
Route::delete('/delete_barang/{id}', [BarangController::class, 'delete_barang']);
Route::post('/add_barang/{id}', [BarangController::class, 'barangs']);
Route::put('/edit_barang/{id}', [BarangController::class, 'edit']);

Route::get('/barang_rusak', [BarangController::class, 'barangrusak']);
Route::get('/barang_baik', [BarangController::class, 'barangbaik']);

Route::get('/cetakPDF_rusak', [BarangController::class, 'cetakPDF_barangrusak']);
Route::get('/cetakPDF_baik', [BarangController::class, 'cetakPDF_barangbaik']);

