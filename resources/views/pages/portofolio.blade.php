@extends('layouts.layout-front')

@section('title')
    portofolio
@endsection

@push('addStyle')
<link rel="stylesheet" href="{{asset('js/lightbox2-2.11.4/src/css/lightbox.css')}}">
    <style>
        img{
            height: 200px;
            width: 100%;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
<main style="min-height: 100vh">
    <div class="container text-center">
        <div class="h3 mb-5">Lihat Portofolio Kami</div>
        <div class="row">
            @foreach ($data as $item)
                <div class="col-md-4">
                    <a href="{{asset("storage/$item->photo")}}" data-lightbox="{{$item->deskripsi}}" data-title="{{$item->deskripsi}}">

                        <img src="{{asset("storage/$item->photo")}}" class=" rounded " alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection


@push('addScript')
    <script src="{{asset('js/lightbox2-2.11.4/src/js/lightbox.js')}}"></script>
    <script>
        lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
        })
    </script>
@endpush
