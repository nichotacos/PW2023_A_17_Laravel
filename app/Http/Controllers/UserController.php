<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Ramsey\Uuid\Uuid;
use App\Models\Cart;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $carts = Cart::where('user_id', auth()->user()->id)->with('product')->get();

        $user->update([
            'full_name' => $request->full_name,
            'telephone' => $request->telephone,
            'address' => $request->address
        ]);

        return view('profile', ['title' => "Profile", 'carts' => $carts]);
    }

    public function updateImage(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $carts = Cart::where('user_id', auth()->user()->id)->with('product')->get();
        $this->validate(
            $request,
            [
                'image' => 'image|mimes:jpeg,png,jpg',
            ],
            [
                'image.image' => '× Image Invalid!'
            ]
        );

        if ($request->hasFile('image')) {
            $file = $request['image'];
            $destinationPath = 'images';
            $myimage = $file->getClientOriginalExtension();
            $fileName = Uuid::uuid4()->getHex() . '.' . $myimage;
            $request->image->move(public_path($destinationPath), $fileName);
        }

        $user->update(['imageData' => $fileName]);

        return redirect()->back();
    }
}
