<?php

namespace App\Http\Controllers;

use App\Models\DataSekolah;
use Illuminate\Http\Request;

class DataSekolahController extends Controller
{
    //
    public function render(){
        $datas = DataSekolah::get();
        return view('DataSekolah',compact('datas'));
    }


    public function create(Request $request){
        DataSekolah::insert([
            "nama_sekolah" => $request->nama_sekolah,
            "alamat_sekolah" => $request->alamat_sekolah,
            "akreditasi_sekolah" => $request->akreditasi_sekolah,
            "jumlah_dosen_sekolah" => $request->jumlah_dosen_sekolah,
        ]);
        return back();
    }
}