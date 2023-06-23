<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $first = DB::table('paket_weeding')->first();
        $items = DB::table('paket_weeding')->where('id', '!=', $first->id)->limit(4)->get();

        return view('pages.home', [
            'first' => $first,
            'items' => $items
        ]);
    }

    public function detail($id){
        $data = DB::table('paket_weeding')->find($id);
        return view('pages.detail', [
            'item' => $data
        ]);
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'tanggal_booking' => 'required',
            'paket_id' => 'required|exists:paket_weeding,id'
        ]);

        $data = $request->except('_token');

        $data['nomor_pesanan'] = "INV/".time();
        $data['user_id'] = auth()->user()->id;

        $insert = DB::table('pesanan')->insertGetId($data);

        return redirect("detail-transaksi?nomor_pesanan=".$data['nomor_pesanan'])->with('success', "Berhasil memesan silahkan selesaikan pembayaran dengan upload bukti bayar");
    }

    public function uploadBuktiBayar(Request $request)
    {
        $request->validate([
            'bukti_bayar' => 'required|image'
        ]);

        $data['bukti_bayar'] = $request->bukti_bayar->store("bukti-bayar", 'public');

        $update = DB::table('pesanan')->where('nomor_pesanan', $request->nomor_pesanan)->update($data);

        return redirect()->back()->with('success', 'Berhasil upload bukti bayar');
    }

    public function detailTransaksi(Request $request){
        if(!$request->nomor_pesanan){
            return redirect("/");
        }

        $pesanan = DB::table('pesanan')
                    ->where('nomor_pesanan', $request->nomor_pesanan)
                    ->join('paket_weeding', 'pesanan.paket_id', 'paket_weeding.id')
                    ->first();

        // if(!$pesanan || $pesanan->user_id !== auth()->user()->id){
        //     return redirect("/");
        // }

        return view('pages.transaksi.detail', compact('pesanan'));
    }
}
