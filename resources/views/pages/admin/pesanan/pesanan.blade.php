@extends('pages.admin.layout-admin')

@section('title')
    Pesanan/Bookingan User
@endsection

@push('addStyle')
<link rel="stylesheet" href="{{asset('js/lightbox2-2.11.4/src/css/lightbox.css')}}">
    <style>
        .bukti_bayar{
            height: 16px;
        }
    </style>
@endpush

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-end my-3">
                <div class="col-md-6">
                    <form action="">
                        <div class="d-flex">
                            <input type="text" placeholder="search data " value="{{request()->get('search')}}" class="form-control" name="search">
                            <button type="submit" class="btn btn-primary ms-2">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">NO</th>
                        <th scope="col">User</th>
                        <th scope="col">Nomor Pesanan</th>
                        <th scope="col">Tanggal Pesanan</th>
                        <th scope="col">Bukti Bayar</th>
                        <th scope="col">status</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pesanan as $index => $item)
                            <tr>
                                <th scope="row">{{$index+1}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->nomor_pesanan}}</td>
                                <td>{{$item->tanggal_booking}}</td>
                                <td>
                                    <a href="{{asset("storage/$item->bukti_bayar")}}" data-lightbox="{{$item->status}}" data-title="{{$item->status}}">

                                        <img src="{{asset("storage/$item->bukti_bayar")}}" class="bukti_bayar" alt="">
                                    </a>
                                </td>
                                <td>{{$item->status}}</td>
                                <td>
                                    <a href="/detail-transaksi?nomor_pesanan={{$item->nomor_pesanan}}" class="btn btn-info btn-sm">Detail</a>
                                    @if ($item->status === 'proses')
                                        <a href="{{route('approved', $item->id)}}" class="btn btn-success btn-sm ms-2">Approve</a>
                                    @endif
                                </td>
                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
