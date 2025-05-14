<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
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
