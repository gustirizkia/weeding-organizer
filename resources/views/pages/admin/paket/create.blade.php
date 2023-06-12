@extends('pages.admin.layout-admin')

@section('title')
    Create Paket
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="h5">Create New Paket</div>
            </div>

            <form action="{{route('paket.store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="nama_paket">Nama Paket</label>
                        <input type="text" class="form-control" name="nama_paket" id="nama_paket">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="thumbnail">Thumbnail</label>
                        <input type="file" class="form-control" name="thumbnail" id="thumbnail">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Harga Paket</label>
                        <input type="number" class="form-control" name="harga_paket">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
