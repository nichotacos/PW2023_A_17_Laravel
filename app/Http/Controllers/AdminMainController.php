<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminMainController extends Controller
{
    public function index()
    {
        $users = User::all();
        $countUsers = $users->count();

        $products = Product::all();
        $countProducts = $products->count();

        $carts = Cart::all();
        $countCarts = $carts->count();

        return view('admin.main-admin', ["usersQty" => $countUsers, "productsQty" => $countProducts, "cartsQty" => $countCarts, "title" => "Admin Page"]);
    }
}
