@extends('layouts.layout-front')

@section('title')
    Kontak
@endsection

@section('content')
<main style="min-height: 100vh">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="info-box card">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="info-box card">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="info-box card">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="info-box card">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection