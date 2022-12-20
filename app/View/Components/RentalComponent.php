<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class RentalComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $rentals = DB::table('rentals')->get();
        
        return view('components.rental-component',compact('rentals'));
    }

    public function create(Request $request){
        DB::table('rentals')->insert([
            "nama_peminjam"=>$request->nama_peminjam,
            "jenis_mobil"=>$request->jenis_mobil,
            "tanggal_peminjaman"=>$request->tanggal_peminjaman,
            "akhir_peminjaman"=>$request->akhir_peminjaman,
        ]);

        return back();
    }

    public function getEditRentalDashboard(Request $request,$id){
        $rental = DB::table('rentals')->find($id);
        return view('getEditRentalDashboard', compact('rental'));
    }
}