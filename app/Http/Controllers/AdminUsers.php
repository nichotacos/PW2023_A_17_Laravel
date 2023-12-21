<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUsers extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.users', ['users' => $users, "title" => 'Users']);
    }

    public function destroy(Request $request)
    {
        $users = User::find($request->id);

        $users->delete();

        return redirect()->back();
    }
}
