<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->with('product')->get();
        $reviews = Reviews::where('user_id', auth()->user()->id)->with('product')->get();

        return view('profile', ['carts' => $carts, 'reviews' => $reviews, 'title' => "Profile"]);
    }
}
