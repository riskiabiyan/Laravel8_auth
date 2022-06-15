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
            return redirect('/login');
        }
        else{
            return redirect('/');
        }
    }

    public function home(){
        return view('home');
    }


}
