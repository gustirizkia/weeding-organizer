<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $paket = DB::table('paket_weeding')->orderBy('id', 'desc')->paginate(30);

        return view('pages.admin.paket.paket', [
            'pakets' => $paket
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.paket.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required|string',
            'deskripsi' => 'required|string',
            'thumbnail' => 'required|image',
            'harga_paket' => 'required',
        ]);

        $data = $request->except('_token');

        $data['thumbnail'] = $request->thumbnail->store('thumbnail', 'public');

        $insert = DB::table('paket_weeding')->insertGetId($data);

        return redirect()->route('paket.index')->with('success', "Berhasil Tambah Data");
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
        $item = DB::table('paket_weeding')->find($id);

        return view('pages.admin.paket.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_paket' => 'required|string',
            'deskripsi' => 'required|string',
            'thumbnail' => 'image',
            'harga_paket' => 'required',
        ]);

        $data = $request->except(['_token', '_method']);

        if($request->thumbnail){
            $data['thumbnail'] = $request->thumbnail->store('thumbnail', 'public');
        }

        $insert = DB::table('paket_weeding')->where('id', $id)->update($data);

        return redirect()->route('paket.index')->with('success', "Berhasil Update Data");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table('paket_weeding')->where("id", $id)->delete();

        return redirect()->back()->with('success', "Berhasil hapus data");
    }
}
