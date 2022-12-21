<?php

namespace App\Http\Controllers;

use App\Models\RegisterHandler;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function render(){
        return view('RegisterDashboard');
    }

    public function store(Request $request){
    $validated = $request->validate([
        'username' => ["required","min:5","max:100"],
        'password' => ["required","min:5"],
    ]);
    $validated['password'] = bcrypt($validated['password']);
        
    RegisterHandler::create($validated);
    return back()->with('success', 'Berhasil Mendaftar');
    }
}