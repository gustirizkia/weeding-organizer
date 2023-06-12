@extends('pages.admin.layout-admin')

@section('title')
    Edit Paket {{$item->nama_paket}}
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="h5">Create New Paket</div>
            </div>

            <form action="{{route('paket.update', $item->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="nama_paket">Nama Paket</label>
                        <input type="text" class="form-control" name="nama_paket" required value="{{$item->nama_paket}}" id="nama_paket">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="thumbnail">Thumbnail</label>
                        <input type="file" class="form-control" name="thumbnail" id="thumbnail">
                        <small class="text-secondary">Kosong jika tidak ingin ganti</small>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Harga Paket</label>
                        <input type="number" class="form-control" required value="{{$item->harga_paket}}" name="harga_paket">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" required>{{$item->deskripsi}}</textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
