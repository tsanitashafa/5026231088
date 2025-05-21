<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
// import java.io;


// System.out.println();
// Disini pakai ::
Route::get('/', function () { // internal controller atau inline controller ini boleh tanpa nama
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog'); // tidak ada garis bawah karena filenya tidak punya
});

Route::get('hello', [Link::class,'helloword'] );

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('displayuserinterface', function () {
	return view('displayuserinterface');
});

Route::get('helperologin', function () {
	return view('helperologin');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('template1', function () {
	return view('template1');
});

Route::get('uts', function () {
	return view('uts');
});

Route::get('latihanuts', function () {
	return view('latihanuts');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('linkfe', function () {
	return view('linkfe');
});

Route::get('dosen', [Link::class,'index'] );

Route::get('/pegawai/{nama}', [PegawaiController::class,'index'] );

Route::get('/formulir', [PegawaiController::class,'formulir'] );
Route::post('/formulir/proses', [PegawaiController::class,'proses'] );

// route blog
Route::get('/blog', [BlogController::class,'home'] );
Route::get('/blog/tentang', [BlogController::class,'tentang'] );
Route::get('/blog/kontak', [BlogController::class,'kontak'] );
