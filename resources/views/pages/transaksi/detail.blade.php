@extends('layouts.layout-front')

@section('title')
    Paket {{$pesanan->nama_paket}}
@endsection

@push('addStyle')
    <style>
        .upload-image{
            height: 130px;
            width: 100%;
            margin-top: 18px;
            border: 2px dashed gray;
            padding: 10px;
            border-radius: 12px;
        }
    </style>
@endpush

@section('content')
<main style="min-height: 100vh" >
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">

                    @if ($errors->any())
                        <div class="mb-3 alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <div class="title fw-bold">Nomor Pesanan</div>
                                <div class="subtitle text-secondary">{{$pesanan->nomor_pesanan}}</div>
                                <div class="title fw-bold mt-3">Paket Yang di Pesan</div>
                                <div class="subtitle text-secondary">{{$pesanan->nama_paket}}</div>
                                <div class="title fw-bold mt-3">Tanggal Pemesanan</div>
                                <div class="subtitle text-secondary">{{$pesanan->tanggal_booking}}</div>
                            </div>
                            <div class="text-end">
                                <div class="title fw-bold">Total Pembayaran</div>
                                <div class="subtitle text-secondary">Rp {{number_format($pesanan->harga_paket)}}</div>
                                <div class="title fw-bold mt-3">Status Pesanan</div>
                                <div class="subtitle text-secondary">{{$pesanan->status}}</div>
                            </div>
                        </div>
                        @if (!$pesanan->bukti_bayar)
                            <div class="upload-image">
                                <div class="bg-secondary w-100 h-100 d-flex align-items-center justify-content-center" style="border-radius: 12px;">
                                    <div class="h5 mb-0 text-white">Upload Bukti Bayar</div>
                                </div>
                            </div>
                        @endif
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <form action="{{route('uploadBuktiBayar')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" name="nomor_pesanan" hidden value="{{$pesanan->nomor_pesanan}}">
                                    <input type="file" hidden class="img_upload" name="bukti_bayar">

                                    <div class="submit_image" >
                                        <img src="{{url('storage/'.$pesanan->bukti_bayar)}}" alt="" class="img-fluid w-100 img_preview mt-4" >
                                        <button class="btn btn__primary btn-block w-100 mt-3" >Upload Bukti Bayar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('addScript')
    <script src="{{asset('js/code.jquery.com_jquery-3.6.3.js')}}"></script>
    <script>
        @if(!$pesanan->bukti_bayar)
            $(".submit_image").hide();
        @else
            $(".submit_image button").hide();
        @endif
        $(".upload-image").on("click", function(){
            $(".img_upload").click();
        });

        $(".img_upload").on("change", function(e){
            let file = e.target.files[0];

            if (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    $(".img_preview")
                        .attr("src", event.target.result);
                        $(".submit_image").show();
                        $(".upload-image").hide();
                };
                reader.readAsDataURL(file);
            }
        })
    </script>
@endpush
