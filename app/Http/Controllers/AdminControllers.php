<?php

namespace App\Http\Controllers;
use App\tambahBrg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

use Session;

class AdminControllers extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function displayJenis(){
        $jenis = DB::table('tbljenisbarangs')->get();
        return view('admin/tambah_barang')->with('jenis',$jenis);
    }

    public function displayBarang(){
        $barangs = tambahBrg::paginate(10);
        return view('admin/display_barang')->with('barangs', $barangs);
    }

    public function addBarang(Request $r) {

        $NamaBarang = $r->NamaBarang;
        $KodeJenis  = $r->KodeJenis;
        $HargaNet = $r->HargaNet;
        $HargaJual = $r->HargaJual;
        $Stok = $r->Stok;
        $tambah = new tambahBrg;

        $tambah->NamaBarang = $NamaBarang;
        $tambah->KodeJenis = $KodeJenis;
        $tambah->HargaNet = $HargaNet;
        $tambah->HargaJual = $HargaJual;
        $tambah->Stok = $Stok;

        $tambah->save();
        Session::flash('success',"Sukses Menambah Data");
        return redirect()->back();

    }
}


