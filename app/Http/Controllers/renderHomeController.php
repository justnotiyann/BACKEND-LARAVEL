<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class renderHomeController extends Controller
{
    public function __invoke(){
        return view('index');
    }
}