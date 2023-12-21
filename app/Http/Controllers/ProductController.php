<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories;
use App\Models\Reviews;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function showByCategory($index)
    {
        $products = Product::where('category_id', $index)->get();
        $category = Categories::where('id', $index)->first();
        $viewName = 'products.' . strtolower($category->name);
        return view($viewName, ['products' => $products, 'title' => ($category->name)]);
    }

    public function showDetails($id)
    {
        $products = Product::find($id);
        $reviews = Reviews::where('product_id', $id)->with('user')->get();

        return view('products.details', ['item' => $products, 'title' => ($products->name), 'reviews' => $reviews]);
    }
}
