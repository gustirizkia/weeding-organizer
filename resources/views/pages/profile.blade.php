@extends('layouts.layout-front')

@section('title')
    Profile Saya
@endsection

@section('content')
    <div class="container" style="min-height: 100vh">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger mb-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('profile-update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="">Photo Profile</label>
                            <input type="file" class="form-control" name="image">
                            <small class="text-secondary">*Kosongkan jika tidak ingin ganti</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="name" value="{{auth()->user()->name}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{auth()->user()->email}}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Password">Password baru</label>
                            <input type="password" class="form-control" name="password">
                            <small class="text-secondary">*Kosongkan jika tidak ingin ganti</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Password">Konfirmasi password baru</label>
                            <input type="password" class="form-control" name="password_confirmation">
                            <small class="text-secondary">*Kosongkan jika tidak ingin ganti</small>
                        </div>
                        <div class="col-12 mt-3">
                            <button class="btn btn__primary" type="submit">Update Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
