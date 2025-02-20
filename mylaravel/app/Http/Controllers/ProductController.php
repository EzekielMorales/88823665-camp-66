<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index() {
        return view('product');
    }
    fuction add_product(Request $req){
        $catagory = new Category();
        $catagory->name = $req->category_name;
        $catagory->save();

        foreach($req->product_name as $value){
            $product = new ProductList();
            $product->name = $value;
            $product->category_id = $catagory->id;
            $product->user_id = session('user')->id;
            $product->save();
        }
    }

}
