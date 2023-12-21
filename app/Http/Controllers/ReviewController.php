<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Reviews;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        Reviews::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'added_date' => $request->added_date,
            'rating' => $request->rating,
            'description' => $request->desc,
        ]);

        $carts = Cart::where('user_id', $request->user_id)->where('product_id', $request->product_id)->where('status', 'Shipped')->where('arrival_date', NULL)->first();
        $carts->update(['arrival_date' => now()]);

        return redirect()->back();
    }
}
