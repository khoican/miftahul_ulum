<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendidikanController;

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

Route::get('/', [DashboardController::class, 'home'])->name('home');
Route::get('/pendidikan/{slug}', [DashboardController::class, 'pendidikan'])->name('home.pendidikan');

Route::group(['prefix' => 'prestasi'], function() {
    Route::get('/', [DashboardController::class, 'prestasi'])->name('home.prestasi');
    Route::get('/detail/{slug}', [DashboardController::class, 'detailPrestasi'])->name('home.detailPrestasi');
});

Route::group(['prefix' => 'kegiatan'], function() {
    Route::get('/', [DashboardController::class, 'kegiatan'])->name('home.kegiatan');
    Route::get('/detail/{slug}', [DashboardController::class, 'detailKegiatan'])->name('home.detailKegiatan');
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('proses_login', [UserController::class, 'proses_login'])->name('proses_login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'dashboard'], function() {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

        Route::get('change-password', [UserController::class, 'change_password'])->name('change_password');
        Route::post('proses-change-password', [UserController::class, 'proses_change_password'])->name('proses_change_password');
        Route::get('logout', [UserController::class, 'logout'])->name('logout');

        Route::group(['prefix' => 'kegiatan'], function() {
            Route::get('/', [KegiatanController::class, 'index'])->name('kegiatan');

            Route::get('tambah-data', [KegiatanController::class, 'create'])->name('kegiatan.create');
            Route::post('store', [KegiatanController::class, 'store'])->name('kegiatan.store');

            Route::get('edit/{id}', [KegiatanController::class, 'edit'])->name('kegiatan.edit');
            Route::put('update/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update');

            Route::delete('delete/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.delete');
        });

        Route::group(['prefix' => 'prestasi'], function() {
            Route::get('/', [PrestasiController::class, 'index'])->name('prestasi');

            Route::get('tambah-data', [PrestasiController::class, 'create'])->name('prestasi.create');
            Route::post('store', [PrestasiController::class, 'store'])->name('prestasi.store');

            Route::get('edit/{id}', [PrestasiController::class, 'edit'])->name('prestasi.edit');
            Route::put('update/{id}', [PrestasiController::class, 'update'])->name('prestasi.update');

            Route::delete('delete/{id}', [PrestasiController::class, 'destroy'])->name('prestasi.delete');
        });

        Route::group(['prefix' => 'pendidikan'], function() {
            Route::get('/', [KategoriController::class, 'index'])->name('pendidikan');

            Route::get('tambah-data', [KategoriController::class, 'create'])->name('pendidikan.create');
            Route::post('store', [KategoriController::class, 'store'])->name('pendidikan.store');

            Route::post('detail/{id?}', [PendidikanController::class, 'store'])->name('pendidikan.detail');

            Route::get('edit/{id}', [KategoriController::class, 'edit'])->name('pendidikan.edit');
            Route::put('update/{id}', [KategoriController::class, 'update'])->name('pendidikan.update');

            Route::delete('delete/{id}', [KategoriController::class, 'destroy'])->name('pendidikan.delete');
        });
    });
});


Auth::routes();
