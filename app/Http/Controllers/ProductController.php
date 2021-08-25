<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function showCategory($category) {
        $category = Category::where('alias', $category)->first();

        $products = Product::where('category_id', $category->id)->get();

        return view('categories.index', ['products' => $products, 'category' => $category]);
    }
}
