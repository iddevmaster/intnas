<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('content.products.allproducts');
    }

    public function addProduct()
    {
        return view('content.products.add-products');
    }

    public function editProduct()
    {
        return view('content.products.edit-product');
    }
}
