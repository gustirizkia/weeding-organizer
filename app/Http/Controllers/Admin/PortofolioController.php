<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('portofolio')->orderBy('id', 'desc')->get();
        return view("pages.admin.portofolio.index", [
            'items' => $data
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
        $request->validate([
            'photo' => 'required|image'
        ]);
        $data = $request->except('_token');
        $data['photo'] = $request->photo->store('images', 'public');
        $insertData = DB::table('portofolio')->insertGetId($data);

        return redirect()->back()->with('success', "Berhasil tambah data");
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
        $delete = DB::table('portofolio')->where('id', $id)->delete();

        return redirect()->back()->with('success', "Berhasil hapus data");
    }
}
