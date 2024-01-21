<?php

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

Route::get('/kegiatan', function () {
    return view('pages.admin.kegiatan.index');
});
Route::get('/kegiatan/create', function () {
    return view('pages.admin.kegiatan.create');
});
Route::get('/kegiatan/edit', function () {
    return view('pages.admin.kegiatan.edit');
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
