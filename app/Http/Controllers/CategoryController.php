<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug_categoryName)
    {
        $category = Category::where('slug', $slug_categoryName)->firstOrFail();
        $sub_category = Category::where('sub_category_id', $category->id)->get();

        $products = $category->products;

        return view('category')
            ->with('category', $category)
            ->with('sub_category' , $sub_category)
            ->with('products', $products);
    }
}
