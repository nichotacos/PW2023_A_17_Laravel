<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class AdminOrder extends Controller
{
    public function index()
    {
        $cart = Cart::with('user')->with('product')->get();

        return view('admin.orders', ['carts' => $cart, 'title' => 'Orders']);
    }

    public function ship(Request $request)
    {
        $ship = Cart::find($request->id);
        $currentDateTime = date("Y-m-d");
        $ship->update([
            "status" => "Shipped",
            "ship_date" => $currentDateTime
        ]);

        return redirect()->back();
    }
}
