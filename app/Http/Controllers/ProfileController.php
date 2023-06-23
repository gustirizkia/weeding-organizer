<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.profile');
    }

    public function update(Request $request)
    {
        $request->validate([
            'password' => 'confirmed'
        ]);

        $data = [
            'name' => $request->name,
            "email" => $request->email
        ];

        if($request->image){
            $data['photo_profile'] = $request->image->store("profile", 'public');
        }

        if($request->password){
            $data['password'] = Hash::make($request->password);
        }

        $update = DB::table('users')->where('id', auth()->user()->id)->update($data);

        return redirect()->back()->with('success', "Berhasil update profile");
    }
}
