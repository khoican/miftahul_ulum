<?php

use App\Http\Controllers\KegiatanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.admin.dashboard');
});

Route::get('/prestasi', function () {
    return view('pages.admin.prestasi.index');
});
Route::get('/prestasi/create', function () {
    return view('pages.admin.prestasi.create');
});
Route::get('/prestasi/edit', function () {
    return view('pages.admin.prestasi.edit');
});

Route::get('/pendidikan', function () {
    return view('pages.admin.pendidikan.index');
});
Route::get('/pendidikan/create', function () {
    return view('pages.admin.pendidikan.create');
});
Route::get('/pendidikan/edit', function () {
    return view('pages.admin.pendidikan.edit');
});

Route::group(['prefix' => 'kegiatan'], function() {
    Route::get('/', [KegiatanController::class, 'index'])->name('kegiatan');

    Route::get('tambah-data', [KegiatanController::class, 'create'])->name('kegiatan.create');
    Route::post('store', [KegiatanController::class, 'store'])->name('kegiatan.store');

    Route::get('edit/{id}', [KegiatanController::class, 'edit'])->name('kegiatan.edit');
    Route::put('update/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update');

    Route::delete('delete/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.delete');
});
