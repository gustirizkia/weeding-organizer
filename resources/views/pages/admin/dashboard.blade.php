@extends('pages.admin.layout-admin')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="h4 text-primary">
                    User
                </div>
                <div class="h2 mb-0">
                    {{$data['count_user']}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="h4 text-success">
                    Paket Weeding
                </div>
                <div class="h2 mb-0">
                    {{$data['count_paket']}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="h4 text-warning">
                    Pesanan
                </div>
                <div class="h2 mb-0">
                    {{$data['count_pesanan']}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="h4 text-danger">
                    Portofolio
                </div>
                <div class="h2 mb-0">
                    {{$data['count_portofolio']}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
