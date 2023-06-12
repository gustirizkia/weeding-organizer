@extends('layouts.layout-front')

@section('title')
    Bookingan/Pesanan Saya
@endsection

@section('content')
<main style="min-height: 100vh">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="h2">Bookingan/Pesanan Saya</div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nomor Pesanan</th>
                            <th scope="col">Paket</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $index => $item)
                                <tr>
                                    <th scope="row">{{$index+1}}</th>
                                    <td>{{$item->nomor_pesanan}}</td>
                                    <td>{{$item->nama_paket}}</td>
                                    <td>Rp {{number_format($item->harga_paket)}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>
                                        <a href="/detail-transaksi?nomor_pesanan={{$item->nomor_pesanan}}" class="btn btn-info btn-sm">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10"><div class="text-center">No Data</div></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
