<?php

namespace App\View\Components;

use App\Models\Rental;
use Illuminate\Http\Request;
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
        $rentals = Rental::get();
        
        return view('components.rental-component',compact('rentals'));
    }

    public function create(Request $request){
        Rental::insert([
            "nama_peminjam"=>$request->nama_peminjam,
            "jenis_mobil"=>$request->jenis_mobil,
            "tanggal_peminjaman"=>$request->tanggal_peminjaman,
            "akhir_peminjaman"=>$request->akhir_peminjaman,
        ]);

        return back();
    }

    public function getEditRentalDashboard(Request $request,$id){
        $rental = Rental::find($id);
        return view('getEditRentalDashboard', compact('rental'));
    }
}