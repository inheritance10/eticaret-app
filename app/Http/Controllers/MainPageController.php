<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
        $categories = Category::where('sub_category_id',null)->get()->take(8);
        return view('mainpage')
            ->with('categories', $categories);
    }
}
