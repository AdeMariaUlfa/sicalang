<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('materi.materiKarangbesuki');
});
Route::get('/materi', function () {
    return view('materi');
});
Route::get('/petunjuk', function () {
    return view('petunjuk.petunjuk');
});
Route::get('/kompetensi', function () {
    return view('kompetensi.kompetensi');
});
Route::get('/virtual/Badut', function () {
    return view('virtual-tour.candiBadut');
});
Route::get('/virtual/Karangbesuki', function () {
    return view('virtual-tour.candiKarangBesuki');
});
Route::get('/virtual/Songgoriti', function () {
    return view('virtual-tour.candiSonggoriti');
});
Route::get('/virtual/Kidal', function () {
    return view('virtual-tour.candiKidal');
});  
Route::get('/virtual/Jago', function () {
    return view('virtual-tour.candiJago');
});
Route::get('/virtual/Singasari', function () {
    return view('virtual-tour.candiSingosari');
});
Route::get('/virtual/Sumberawan', function () {
    return view('virtual-tour.candiSumberawan');
});
Route::get('/page-candi/{candi}', [HomeController::class, 'pageCandi']);
Route::get('/login', [HomeController::class, 'login']);
Route::post('/login', [HomeController::class, 'prosesLogin'])->name('proses-login');;
Route::get('/dashboard', [HomeController::class, 'dashboard']);
