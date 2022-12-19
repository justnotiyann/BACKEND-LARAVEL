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

    public function deleteUser($id){
        DB::table('users')->where('id',$id)->delete($id);
        return redirect('/users');
    }

    public function getEditDashboard($id){
        $result = DB::table('users')->where('id', $id)->first();
        return view('editUsers',compact('result'));
    }

    public function editUser(Request $request,$id){
        DB::table('users')->where('id', $id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
        ]);

        return redirect('/users');
    }

}