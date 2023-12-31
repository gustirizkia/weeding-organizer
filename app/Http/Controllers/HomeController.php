<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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

        $now = Carbon::now();
        $tanggal_booking = Carbon::parse($request->tanggal_booking);
        if($tanggal_booking < $now){
            return redirect()->back()->withInput()->with("error", "Tanggal yang anda pilih sudah lewat");
        }

        $cekTanggal = DB::table("pesanan")->where('tanggal_booking', $request->tanggal_booking)->first();

        if($cekTanggal){
            if($cekTanggal->bukti_bayar && $cekTanggal->status !== "Cancel"){

                return redirect()->back()->withInput()->with("error", "Tanggal $request->tanggal_booking sudah penuh");
            }
        }

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

    public function Portofolio(Request $request)
    {
        $data = DB::table("portofolio")->get();

        return view('pages.portofolio', compact('data'));
    }
}
