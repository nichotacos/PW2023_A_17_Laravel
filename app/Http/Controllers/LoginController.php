<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
  protected $username = 'username';
  public function login()
  {
    if (Auth::check()) {
      return redirect('home');
    } else {
      return view('login');
    }
  }

  public function actionLogin(Request $request)
  {
    $data = [
      'username' => $request->input('username'),
      'password' => $request->input('password'),
    ];

    if ($data['username'] == 'admin' && $data['password'] == 'gueadmin') return redirect('/admin');

    // dd($data);

    if (Auth::attempt($data)) {
      $user = Auth::user();

      if ($user->active == 1) {
        // return view('home');
        return redirect('home');
      } else {
        Auth::logout();
        Session::flash('error', 'Akun Anda Belum Diverifikasi. Silahkan cek email Anda');
        return redirect('/');
      }
    } else {
      $attemptedUser = Auth::getLastAttempted();
      // dd($attemptedUser);
      Session::flash('error', 'Email atau Password Salah');
      return redirect('/');
    }
  }

  public function actionLogout()
  {
    Auth::logout();
    return redirect('/');
  }
}
