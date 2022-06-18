<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function simpanuser(Request $request){
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        session()->flash('success','Thank you, you are now registers');

        return redirect('/login');
    }

    public function login(){
        return view('login');
    }

    public function ceklogin(Request $request){
        if (!Auth::attempt([
            'email' => $request -> email,
            'password' => $request -> password
        ])){
            session()->flash('login_gagal','Thank you, you are now registers');
            return redirect('/login');
        }
        else{
            $request->session()->regenerate();
            return redirect('/');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
