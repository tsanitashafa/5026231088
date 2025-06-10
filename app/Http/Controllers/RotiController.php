<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RotiController extends Controller
{
    public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get(); //array all record
        $roti = DB::table('roti')->paginate(10); //kalau tanpa angka dalam kurung, defaultnya itu 15
    	// mengirim data pegawai ke view index
		return view('roti/index3',['roti' => $roti]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('roti/tambahr');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('roti')->insert([
			'roti_merkroti' => $request->merkroti,
			'roti_hargaroti' => $request->hargaroti,
			'roti_tersedia' => $request->tersedia,
			'roti_berat' => $request->berat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/roti');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$roti = DB::table('roti')->where('roti_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('roti/editr',['roti' => $roti]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('roti')->where('roti_id',$request->id)->update([
			'roti_merkroti' => $request->merkroti,
			'roti_hargaroti' => $request->hargaroti,
			'roti_tersedia' => $request->tersedia,
			'roti_berat' => $request->berat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/roti');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('roti')->where('roti_id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/roti');
	}

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table roti sesuai pencarian data di beberapa kolom
        $roti = DB::table('roti')
            ->where('roti_merkroti', 'like', "%" . $cari . "%") // for merkroti, like works
            ->orWhere('roti_hargaroti', '=', $cari) // exact match for harga
            ->orWhere('roti_tersedia', '=', $cari == 'tersedia' ? 1 : ($cari == 'tidak tersedia' ? 0 : null)) // checking if available or not
            ->paginate();

        // mengirim data roti ke view index3
        return view('roti/index3', ['roti' => $roti, 'cari' => $cari]);
    }
}
