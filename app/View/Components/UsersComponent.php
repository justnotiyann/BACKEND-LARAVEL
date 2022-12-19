<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class UsersComponent extends Component
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
        $results = DB::table('users')->get();

        return view('components.users-component', compact('results'));
    }

    public function create(Request $request){
        DB::table('users')->insert([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'jurusan'=>$request->jurusan,
        ]);

        return back();
    }

}