<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class ShipmentController extends Controller
{
    public function showShipmentByUser($id)
    {
        $cart = Cart::where('user_id', $id)->with('product')->get();

        return view('shipment', ['inventory' => $cart, 'title' => 'Shipment']);
    }
}
