<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class ProductComponent extends Component

{
    public function render()
    {
        $products = DB::table('products')->get();
        return view('components.product-component',compact('products'));
    }


    public function create(Request $request){
        DB::table('products')->insert([
            'product'=>$request->product,
            'country'=>$request->country,
            'price'=>$request->price,
        ]);
        return back();
    }
    
    public function getEditDashboard($id){
        $result = DB::table('products')->where('id', $id)->first();
        return view('editProduct',compact('result'));
    }
    

    public function editProduct(Request $request,$id){
        DB::table('products')->where('id', $id)->update([
            'product'=>$request->product,
            'country'=>$request->country,
            'price'=>$request->price,
        ]);

        return redirect('/product');
    }

    public function deleteProduct(Request $req,$id){
        DB::table('products')->where('id', $id)->delete($id);
        return redirect('/product');
    }
}