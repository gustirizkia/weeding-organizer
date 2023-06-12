<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginPage(Request $request){
        return view('auth.login');
    }

    public function prosesLogin(Request $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->intended('home');
        }else{
            return redirect()->back()->with('error', "Login gagal");
        }

    }

    public function registerPage(Request $request)
    {
        return view('auth.register');
    }

    public function prosesRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string'
        ]);

        $data = $request->except('_token');
        $data['password'] = Hash::make($request->password);

        $user = DB::table('users')->insertGetId($data);

        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        return redirect('/');

    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
