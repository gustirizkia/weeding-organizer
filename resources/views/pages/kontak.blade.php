@extends('layouts.layout-front')

@section('title')
    Kontak
@endsection

@section('content')
<main style="min-height: 100vh">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-3">
                <div class="info-box card h-100">
                    <div class="card-body">

                        <div class="d-flex">
                            <div class="btn btn__primary  d-inline-block">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                        </div>
                    <h3>Alamat</h3>
                    <p>Pamulang Barat</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="info-box card h-100">
                    <div class="card-body">
                        <div class="icon btn btn__primary ">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <h3>Nomor Telepon</h3>
                        <p>0899116022<br>0812999123</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="info-box card h-100">
                    <div class="card-body">
                        <div class="btn btn__primary ">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <h3>Email</h3>
                        <p>info@gmail.com<br>contact@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="info-box card h-100">
                    <div class="card-body">
                        <div class="icon btn btn__primary ">
                            <i class="bi bi-clock"></i>
                        </div>
                        <h3>Jam Kerja</h3>
                        <p>Senin - Jumat<br>9:00AM - 05:00PM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
