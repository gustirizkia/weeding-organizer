<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        $pesanan = DB::table('pesanan')
                    ->join('users', 'pesanan.user_id', 'users.id')
                    ->when($search, function($query)use($search){
                        return $query->where('nomor_pesanan', "LIKE", "%$search%")
                                ->orWhere("users.name", "LIKE", "%$search%");
                    })
                    ->select("pesanan.*", 'users.name')
                    ->orderBy('pesanan.id', 'desc')->get();

        return view('pages.admin.pesanan.pesanan', [
            'pesanan' => $pesanan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table('pesanan')->where('id', $id)->delete();

        return redirect()->back()->with('success', "Berhasil hapus data");
    }

    public function approved($id){
        $data = DB::table('pesanan')->where('id', $id)->update([
            'status' => 'Approved'
        ]);

        return redirect()->back()->with('success', "Berhasil Approve Pesanan");
    }
}
