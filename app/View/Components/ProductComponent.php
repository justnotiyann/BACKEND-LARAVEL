<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class ProductComponent extends Component

{
    public function render()
    {
        $products = Product::get();
        return view('components.product-component',compact('products'));
    }


    public function create(Request $request){
        Product::insert([
            'product'=>$request->product,
            'country'=>$request->country,
            'price'=>$request->price,
        ]);
        return back();
    }
    
    public function getEditDashboard($id){
        $result = Product::find($id)->first();
        return view('editProduct',compact('result'));
    }
    

    public function editProduct(Request $request,$id){
        Product::find($id)->update([
            'product'=>$request->product,
            'country'=>$request->country,
            'price'=>$request->price,
        ]);

        return redirect('/product');
    }

    public function deleteProduct(Request $req,$id){
        Product::find($id)->delete($id);
        return redirect('/product');
    }
}