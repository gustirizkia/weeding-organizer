@extends('layouts.layout-front')

@section('title')
    Paket {{$item->nama_paket}}
@endsection

@push('addStyle')
    <style>
        .deskripsi{
            white-space: pre-wrap;
        }
    </style>
@endpush

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
            <li class="breadcrumb-item active" aria-current="page">{{$item->nama_paket}}</li>
        </ol>
    </nav>
</div>
<div class="container">
    <div class="row mb-5 mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <img src="{{asset("storage/$item->thumbnail")}}" alt="" class="img-fluid">
                    <div class="my-3">
                        <div class="h3 mb-0">{{$item->nama_paket}}</div>
                    </div>
                    <div class="deskripsi">{{$item->deskripsi}}</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="sticky-top">
                <div class="card">
                    <div class="card-body">
                        <div class="h5 mb-2">
                            Pesan Sekarang
                        </div>
                        <form action="{{route('checkout')}}" method="POST">
                            @csrf
                            <label for="">Harga</label>
                            <div class="fw-bold mb-3">
                                Rp. {{number_format($item->harga_paket)}}
                            </div>
                            <input type="number" name="paket_id" hidden value="{{$item->id}}">
                            <label for="">Jadwal Pemesanan</label>
                            <input type="date" class="mt-2 form-control" name="tanggal_booking" required>
                            <button type="submit" class="btn btn__primary mt-3 btn-block w-100">Lanjut Pemesanan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

