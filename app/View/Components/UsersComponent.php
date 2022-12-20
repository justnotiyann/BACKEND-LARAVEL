<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\Http\Request;
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
        $results = User::get();
        // $results = User::get();
        return view('components.users-component', compact('results'));
    }

    public function create(Request $request){
        User::insert([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'jurusan'=>$request->jurusan,
        ]);

        return back();
    }

    public function deleteUser($id){
        User::find($id)->delete($id);
        return redirect('/users');
    }

    public function getEditDashboard($id){
        $result = User::find($id)->first();
        return view('editUsers',compact('result'));
    }

    public function editUser(Request $request,$id){
        User::find($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
        ]);

        return redirect('/users');
    }

}