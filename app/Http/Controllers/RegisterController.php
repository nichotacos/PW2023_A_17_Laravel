<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function actionRegister(Request $request){

        $str = Str::random(100);
        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
            'verify_key' => $str,
            'imageData' => 'default.avif'
        ]);

        $details = [
            'username' => $request->username,
            'website' => 'Atma Library',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost() . '/register/verify/' . $str
        ];

        Mail::to($request->email)->send(new MailSend($details));

        Session::flash('message','Link Verifikasi Telah Dikirim Ke Email Anda. Silahkan Cek Email Anda Untuk Mengaktifkan AKun');
        return redirect('register');
    }

    public function verify($verify_key){
        
        $keyCheck = User::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exists();

        if($keyCheck){
            $user = User::where('verify_key', $verify_key)
                ->update([
                    'active' => 1,
                    'email_verified_at' => date('Y-m-d H:i:s'),
                ]);

            return "Verifikasi Berhasil. Akun Anda Sudah Aktif.";
        } else {
            return "Keys Tidak Valid";
        }
    }
}
