<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        // print_r($category);
        // dd($category);
        return view("categories.show",compact("category"));
    }
}
