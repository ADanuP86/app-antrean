<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller {

    public function index() {
    	// mengambil data dari table antrean
    	$antrean = DB::table('antrean')
        ->orderBy('id', 'desc')
        ->get();
        
    	// mengirim data coba ke view home
    	return view('home', [
            "title" => "Home | Antrean",
            'antrean' => $antrean
        ]);
    }
    
    // method untuk menampilkan view form tambah data
    public function tambah1() {
        $antre = DB::table('antrean')
        ->select('no_antre')
        ->where('teller', "1")
        ->latest('id')
        ->first();
	// memanggil view tambah
    if($antre == null) {
	return view('tambah_1', [
        "title" => "Tambah Data",
        'antre' => $antre
        ]);}
        else {
            return view('tambah1', [
                "title" => "Tambah Data",
                'antre' => $antre
                ]);
        }
    }

    // method untuk menampilkan view form tambah data
    public function tambah2() {
        $antre = DB::table('antrean')
        ->select('no_antre')
        ->where('teller', "2")
        ->latest('id')
        ->first();
	// memanggil view tambah
    if($antre == null) {
	return view('tambah_2', [
        "title" => "Tambah Data",
        'antre' => $antre
        ]);}
        else {
            return view('tambah2', [
                "title" => "Tambah Data",
                'antre' => $antre
                ]);
        }
    }

    // method untuk insert data ke table antrean
    public function store1(Request $request) {
	// insert data ke table antrean
	DB::table('antrean')->insert([
		'cabang' => $request->cabang,
		'teller' => $request->teller,
		'nasabah' => $request->nasabah,
        'no_antre' => $request->no_antre,
        'status' => $request->status
	]);
	// alihkan halaman ke halaman home
	return redirect('/teller1');
    }

    public function store2(Request $request) {
        // insert data ke table antrean
        DB::table('antrean')->insert([
            'cabang' => $request->cabang,
            'teller' => $request->teller,
            'nasabah' => $request->nasabah,
            'no_antre' => $request->no_antre,
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman home
        return redirect('/teller2');
        }

    // method untuk edit data antrean
    public function edit1($id) {
	// mengambil data antrean berdasarkan id yang dipilih
	$antrean = DB::table('antrean')->where('id',$id)->get();
	// passing data coba yang didapat ke view edit.blade.php
	return view('edit1', [
        "title" => "Edit Data",
        'antrean' => $antrean
        ]);
    }

    // method untuk edit data antrean
    public function edit2($id) {
        // mengambil data antrean berdasarkan id yang dipilih
        $antrean = DB::table('antrean')->where('id',$id)->get();
        // passing data coba yang didapat ke view edit.blade.php
        return view('edit2', [
            "title" => "Edit Data",
            'antrean' => $antrean
            ]);
        }

    // update data antrean
    public function update1(Request $request) {
	// update data antrean berdasarkan id
	DB::table('antrean')->where('id',$request->id)->update([
		'cabang' => $request->cabang,
		'teller' => $request->teller,
		'nasabah' => $request->nasabah,
        'no_antre' => $request->no_antre,
        'status' => $request->status
	]);
	// alihkan halaman ke halaman home
	return redirect('/teller1');
    }

    // update data antrean
    public function update2(Request $request) {
        // update data antrean berdasarkan id
        DB::table('antrean')->where('id',$request->id)->update([
            'cabang' => $request->cabang,
            'teller' => $request->teller,
            'nasabah' => $request->nasabah,
            'no_antre' => $request->no_antre,
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman home
        return redirect('/teller2');
        }

    // method untuk hapus data antrean
    public function hapus1($id) {
	// menghapus data antrean berdasarkan id yang dipilih
	DB::table('antrean')->where('id',$id)->delete();
	// alihkan halaman ke halaman home
	return redirect('/teller1');
    }

    public function hapus2($id) {
        // menghapus data antrean berdasarkan id yang dipilih
        DB::table('antrean')->where('id',$id)->delete();
        // alihkan halaman ke halaman home
        return redirect('/teller2');
        }

    public function teller1() {
        $antrean = DB::table('antrean')
            ->select('*')
            ->orderBy('id', 'asc')
            ->where('teller', "1")
            ->where('status', "menunggu")
            ->get();

        $teller1all = DB::table('antrean')
            ->select('*')
            ->orderBy('id', 'desc')
            ->where('teller', "1")
            ->get();
        
        return view('teller1', [
            "title" => "Home | Data Teller 1",
            'antrean' => $antrean,
            'teller1all' => $teller1all
        ]);
    }

    public function panggil1(Request $request) {
        // update data antrean berdasarkan id
	    DB::table('antrean')->where('id',$request->id)->update([
        'status' => "selesai"
	    ]);
        // alihkan halaman ke halaman home
        return redirect('/teller1');
    }

    public function panggil2(Request $request) {
        // update data antrean berdasarkan id
	    DB::table('antrean')->where('id',$request->id)->update([
        'status' => "selesai"
	    ]);
        // alihkan halaman ke halaman home
        return redirect('/teller2');
    }

    public function teller2() {
        $antrean = DB::table('antrean')
            ->select('*')
            ->orderBy('id', 'asc')
            ->where('teller', "2")
            ->where('status', "menunggu")
            ->get();

        $teller2all = DB::table('antrean')
            ->select('*')
            ->orderBy('id', 'desc')
            ->where('teller', "2")
            ->get();
        
        return view('teller2', [
            "title" => "Home | Data Teller 2",
            'antrean' => $antrean,
            'teller2all' => $teller2all
        ]);
    }

}
