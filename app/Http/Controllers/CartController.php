<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Exception;
use Illuminate\Support\Str;

class CartController extends Controller
{

    public function showByUser($id)
    {
        $cart = Cart::where('user_id', $id)->with('product')->get();

        // $products = [];

        // foreach ($cart as $item) {
        //     $productId = $item->product_id;
        //     $product = Product::find($productId);

        //     $products[] = $product;
        // }

        // dd($cart);

        return view('cart', ['inventory' => $cart, 'title' => 'Cart']);
    }

    public function store(Request $request)
    {
        $cart = Cart::where('product_id', $request->product_id)->where('status', 'On process')->first();
        $product = Product::where('id', $request->product_id)->first();

        if (!$cart) {
            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $request->product_id,
                'quantity' => $request->modifiedQuantity,
                'status' => 'On process',
                'total_price' => $request->modifiedQuantity * $product->price,
                'tracking_id' => Str::random(12)
            ]);
        } else {
            $cart->update([
                'quantity' => $request->modifiedQuantity,
            ]);
        }

        return redirect()->back();
    }
}
