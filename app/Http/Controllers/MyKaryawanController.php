<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyKaryawanController extends Controller
{
    public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get(); //array all record
        $mykaryawan = DB::table('mykaryawan')->get(); //kalau tanpa angka dalam kurung, defaultnya itu 15
    	// mengirim data pegawai ke view index
		return view('uas/index',['mykaryawan' => $mykaryawan]);

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('mykaryawan')->insert([
			'kodepegawai' => $request->merkroti,
			'namalengkap' => $request->hargaroti,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/uas');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('uas/edituas',['mykaryawan' => $mykaryawan]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('mykaryawan')->where('kodepegawai',$request->id)->update([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/uas');
	}

    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
		$mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('uas/viewuas',['mykaryawan' => $mykaryawan]);
    }
}
