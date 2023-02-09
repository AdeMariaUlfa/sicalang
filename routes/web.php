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
    return view('welcome');
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
//Virtual Tour
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
//Materi Candi
Route::get('/materi/Badut', function () {
    return view('materi.materiBadut');
});
Route::get('/materi/Karangbesuki', function () {
    return view('materi.materiKarangbesuki');
});
Route::get('/materi/Songgoriti', function () {
    return view('materi.materiSonggoriti');
});
Route::get('/materi/Kidal', function () {
    return view('materi.materiKidal');
});  
Route::get('/materi/Jago', function () {
    return view('materi.materiJago');
});
Route::get('/materi/Singasari', function () {
    return view('materi.materiSingasari');
});
Route::get('/materi/Sumberawan', function () {
    return view('materi.materiSumberawan');
});

//Maps
Route::get('/map/Badut', function () {
    return view('map.map-badut');
});
Route::get('/map/Karangbesuki', function () {
    return view('map.map-karangBesuki');
});
Route::get('/map/Songgoriti', function () {
    return view('map.map-songgoriti');
});
Route::get('/map/Kidal', function () {
    return view('map.map-kidal');
});  
Route::get('/map/Jago', function () {
    return view('map.map-jago');
});
Route::get('/map/Singasari', function () {
    return view('map.map-singosari');
});
Route::get('/map/Sumberawan', function () {
    return view('map.map-sumberawan');
});

Route::get('/page-candi/{candi}/{link}', [HomeController::class, 'pageCandi']);
Route::get('/login', [HomeController::class, 'login']);
Route::post('/login', [HomeController::class, 'prosesLogin'])->name('proses-login');;
Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::get('/quiz/{s}/{j}/{sblm}', [HomeController::class, 'quizCandi']);
Route::get('/video-candi/{link}', [HomeController::class, 'videoCandi']);
Route::get('/lokasi-candi/{link}', [HomeController::class, 'lokasiCandi']);
