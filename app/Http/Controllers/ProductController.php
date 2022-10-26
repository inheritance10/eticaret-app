<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug_productName)
    {
        $productDetail = Product::whereSlug($slug_productName)->firstOrFail();
        $categories = $productDetail->categories()->distinct()->get();
        return view('product')
            ->with('productDetail', $productDetail)
            ->with('categories', $categories);
    }
}
