<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data['count_pesanan'] = DB::table('pesanan')->count();
        $data['count_paket'] = DB::table('paket_weeding')->count();
        $data['count_portofolio'] = DB::table('portofolio')->count();
        $data['count_user'] = DB::table('users')->count();

        return view('pages.admin.dashboard', compact('data'));
    }
}
