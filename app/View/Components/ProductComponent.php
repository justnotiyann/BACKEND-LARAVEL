<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class ProductComponent extends Component

{
        /**
     * Create a new component instance.
     *
     * @return void
     */
        /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function __construct()
    {
        //
    }

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

    public function destory(Request $request){
        $id = $request->id;
        DB::table('products')->delete(id:$id)
    }
    
}