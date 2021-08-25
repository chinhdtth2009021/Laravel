<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('/product/form');
    }
    //
    public function store(Request $request){
        $product = new Product();
        $product->fill($request->all());
        $product->save();
        return redirect('/product/form');
    }
    public function list(Request $request){
        $list = Product::fill($request->all());
//        $list->fill($request->all());
//        $list = $request->all();
        return view('/product/list');
    }
}
