<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminStocks extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.stocks', ['products' => $products, "title" => 'Stocks']);
    }
}
