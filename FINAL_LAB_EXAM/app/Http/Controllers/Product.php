<?php

namespace App\Http\Controllers;

use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;

class Product extends Controller
{
    public function addProduct(){
        return view('employee.addProduct');
    }

    public function add_to_DB(Request $req){
        $product = new ModelsProduct();

        $product->product_name = $req->product_name;
        $product->quantity = $req->quantity;
        $product->price = $req->price;

        $product->save();


        return redirect('/login');
    }
}
