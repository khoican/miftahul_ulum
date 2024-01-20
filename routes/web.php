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
