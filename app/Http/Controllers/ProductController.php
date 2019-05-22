<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    function index()
    {
        //$p=new Product();
        //$p->title = 'Produto3';
        //$p->description='Descrição do produto 3';
        //$p->save();
        $products = Product::all();

        return view('products')
            ->with('products', $products); 

    }

    function show($id)
    {
        $product =Product::findOrFail($id);

        return view('product')
            -> with ('product', $product);
    }

}
