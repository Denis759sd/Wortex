<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $user_count = User::all()->count();
        $product_count = Product::all()->count();

        return view('admin.home.index', [
            'user_count' => $user_count,
            'product_count' => $product_count
        ]);
    }
}
