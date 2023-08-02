@extends('layouts.layout-front')

@section('title')
    Home
@endsection

@push('addStyle')
    <style>
        .thumbnail{
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 12px;
        }
        .item__image{
            object-fit: cover;
            width: 100%;
            height: 200px;
            border-radius: 12px;
        }
        .nama_paket{
            background: linear-gradient(360deg, #000000 0%, rgba(66, 66, 66, 0) 100%);
            border-radius: 0px 0px 12px 12px;
            position: absolute;
            bottom: 0;
        }
        .price{
            position: absolute;
            top: 0;
            right: 0;
            background: #D1C1AC;
            border-radius: 0px 12px;
            color: rgb(47, 47, 47);
            font-weight: 500;
        }
    </style>
@endpush

@section('content')
    <div class="hero d-flex align-items-center justify-content-center flex-column " style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)), url({{asset('images/banner-hero.jpg')}});">
        <div class="text-center text-white">
            <div class="h2">
                When your <br>
                Dream Wedding come true
            </div>
            <p>
                “ Once in a while, right in the middle of an
                ordinary life, love gives us a fairy tale. ”
            </p>
            <a href="#paket" class="btn btn__primary px-5">
                Mulai
            </a>
        </div>
    </div>
    <div class="container">
        <div class="card card_overview  mx-md-5">
            <div class="d-md-flex align-items-center justify-content-between pe-3 py-3">
                <div class="d-flex align-items-center justify-content-center">
                    <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="62" height="62" rx="12" fill="white"/>
                    <path d="M31.5 39.2777C34.3995 39.2777 36.75 36.6661 36.75 33.4444C36.75 30.2227 34.3995 27.6111 31.5 27.6111C28.6005 27.6111 26.25 30.2227 26.25 33.4444C26.25 36.6661 28.6005 39.2777 31.5 39.2777Z" stroke="#D1C1AC" stroke-width="3.5"/>
                    <path d="M14 34.1523C14 28.1926 14 25.2137 15.3108 23.0748C15.8798 22.1447 16.609 21.349 17.4562 20.7337C18.7162 19.814 20.2948 19.4854 22.7115 19.3687C23.8648 19.3687 24.857 18.4159 25.0828 17.1812C25.2553 16.2768 25.7035 15.4663 26.3518 14.8867C27 14.3071 27.8085 13.9939 28.6405 14.0001H34.3595C36.0885 14.0001 37.5777 15.332 37.9172 17.1812C38.143 18.4159 39.1352 19.3687 40.2885 19.3687C42.7035 19.4854 44.282 19.8159 45.5437 20.7337C46.3925 21.352 47.1222 22.1473 47.6892 23.0748C49 25.2137 49 28.1926 49 34.1523C49 40.11 49 43.0889 47.6892 45.2297C47.1192 46.1589 46.3902 46.9544 45.5437 47.5708C43.582 49 40.8503 49 35.3885 49H27.6115C22.1497 49 19.418 49 17.4562 47.5708C16.6102 46.9537 15.8818 46.1576 15.3125 45.2278C14.9332 44.598 14.6533 43.901 14.4847 43.1667M43.75 27.6112H42" stroke="#D1C1AC" stroke-width="3.5" stroke-linecap="round"/>
                    </svg>
                    <div class="fw-bold title_overview">
                        Prewedding
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="62" height="62" rx="12" fill="white"/>
                    <path d="M31.5 39.2777C34.3995 39.2777 36.75 36.6661 36.75 33.4444C36.75 30.2227 34.3995 27.6111 31.5 27.6111C28.6005 27.6111 26.25 30.2227 26.25 33.4444C26.25 36.6661 28.6005 39.2777 31.5 39.2777Z" stroke="#D1C1AC" stroke-width="3.5"/>
                    <path d="M14 34.1523C14 28.1926 14 25.2137 15.3108 23.0748C15.8798 22.1447 16.609 21.349 17.4562 20.7337C18.7162 19.814 20.2948 19.4854 22.7115 19.3687C23.8648 19.3687 24.857 18.4159 25.0828 17.1812C25.2553 16.2768 25.7035 15.4663 26.3518 14.8867C27 14.3071 27.8085 13.9939 28.6405 14.0001H34.3595C36.0885 14.0001 37.5777 15.332 37.9172 17.1812C38.143 18.4159 39.1352 19.3687 40.2885 19.3687C42.7035 19.4854 44.282 19.8159 45.5437 20.7337C46.3925 21.352 47.1222 22.1473 47.6892 23.0748C49 25.2137 49 28.1926 49 34.1523C49 40.11 49 43.0889 47.6892 45.2297C47.1192 46.1589 46.3902 46.9544 45.5437 47.5708C43.582 49 40.8503 49 35.3885 49H27.6115C22.1497 49 19.418 49 17.4562 47.5708C16.6102 46.9537 15.8818 46.1576 15.3125 45.2278C14.9332 44.598 14.6533 43.901 14.4847 43.1667M43.75 27.6112H42" stroke="#D1C1AC" stroke-width="3.5" stroke-linecap="round"/>
                    </svg>
                    <div class="fw-bold title_overview">
                        Wedding
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="62" height="62" rx="12" fill="white"/>
                    <path d="M43.25 13.5C42.7859 13.5 42.3407 13.6844 42.0126 14.0126C41.6844 14.3408 41.5 14.7859 41.5 15.25V24.805L39.75 25.9775V15.25C39.75 14.7859 39.5656 14.3408 39.2374 14.0126C38.9093 13.6844 38.4641 13.5 38 13.5C37.5359 13.5 37.0908 13.6844 36.7626 14.0126C36.4344 14.3408 36.25 14.7859 36.25 15.25V25.9775L34.5 24.805V15.25C34.5 14.7859 34.3156 14.3408 33.9874 14.0126C33.6592 13.6844 33.2141 13.5 32.75 13.5C32.2859 13.5 31.8408 13.6844 31.5126 14.0126C31.1844 14.3408 31 14.7859 31 15.25V25.75C31.0015 26.0382 31.0742 26.3216 31.2115 26.575C31.3489 26.8284 31.5468 27.044 31.7875 27.2025L36.25 30.195V46.75C36.25 47.2141 36.4344 47.6592 36.7626 47.9874C37.0908 48.3156 37.5359 48.5 38 48.5C38.4641 48.5 38.9093 48.3156 39.2374 47.9874C39.5656 47.6592 39.75 47.2141 39.75 46.75V30.195L44.2125 27.2025C44.4532 27.044 44.6511 26.8284 44.7885 26.575C44.9258 26.3216 44.9985 26.0382 45 25.75V15.25C45 14.7859 44.8156 14.3408 44.4874 14.0126C44.1593 13.6844 43.7141 13.5 43.25 13.5ZM25.75 13.5C23.4294 13.5 21.2038 14.4219 19.5628 16.0628C17.9219 17.7038 17 19.9294 17 22.25V32.75C17 33.2141 17.1844 33.6592 17.5126 33.9874C17.8408 34.3156 18.2859 34.5 18.75 34.5H24V46.75C24 47.2141 24.1844 47.6592 24.5126 47.9874C24.8408 48.3156 25.2859 48.5 25.75 48.5C26.2141 48.5 26.6592 48.3156 26.9874 47.9874C27.3156 47.6592 27.5 47.2141 27.5 46.75V15.25C27.5 14.7859 27.3156 14.3408 26.9874 14.0126C26.6592 13.6844 26.2141 13.5 25.75 13.5ZM24 31H20.5V22.25C20.4994 21.1639 20.8357 20.1043 21.4626 19.2173C22.0894 18.3303 22.976 17.6595 24 17.2975V31Z" fill="#D1C1AC"/>
                    </svg>
                    <div class="fw-bold title_overview">
                        Catering
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="62" height="62" rx="12" fill="white"/>
                    <path d="M31.5 39.2777C34.3995 39.2777 36.75 36.6661 36.75 33.4444C36.75 30.2227 34.3995 27.6111 31.5 27.6111C28.6005 27.6111 26.25 30.2227 26.25 33.4444C26.25 36.6661 28.6005 39.2777 31.5 39.2777Z" stroke="#D1C1AC" stroke-width="3.5"/>
                    <path d="M14 34.1523C14 28.1926 14 25.2137 15.3108 23.0748C15.8798 22.1447 16.609 21.349 17.4562 20.7337C18.7162 19.814 20.2948 19.4854 22.7115 19.3687C23.8648 19.3687 24.857 18.4159 25.0828 17.1812C25.2553 16.2768 25.7035 15.4663 26.3518 14.8867C27 14.3071 27.8085 13.9939 28.6405 14.0001H34.3595C36.0885 14.0001 37.5777 15.332 37.9172 17.1812C38.143 18.4159 39.1352 19.3687 40.2885 19.3687C42.7035 19.4854 44.282 19.8159 45.5437 20.7337C46.3925 21.352 47.1222 22.1473 47.6892 23.0748C49 25.2137 49 28.1926 49 34.1523C49 40.11 49 43.0889 47.6892 45.2297C47.1192 46.1589 46.3902 46.9544 45.5437 47.5708C43.582 49 40.8503 49 35.3885 49H27.6115C22.1497 49 19.418 49 17.4562 47.5708C16.6102 46.9537 15.8818 46.1576 15.3125 45.2278C14.9332 44.598 14.6533 43.901 14.4847 43.1667M43.75 27.6112H42" stroke="#D1C1AC" stroke-width="3.5" stroke-linecap="round"/>
                    </svg>
                    <div class="fw-bold title_overview">
                        Video Cinematic
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="mb-4 h2" id="paket">
            Pilih Paket Menarik Kami
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 pb-3">
                <a href="{{route('detail', $first->id)}}" class="">
                    <div class="position-relative h-100">
                        <img src="{{asset("storage/$first->thumbnail")}}" class="thumbnail" >
                        <div class="nama_paket w-100 p-3 text-white">
                            <div class="h4 mb-0">
                                {{$first->nama_paket}}
                            </div>
                        </div>
                        <div class="price px-4 py-2">
                            Rp. {{number_format($first->harga_paket)}}
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-8">
                <div class="row">
                    @foreach ($items as $index => $item)
                        <div class="col-6 mb-3">
                            <a href="{{route('detail', $item->id)}}">
                                <div class="position-relative">
                                    <img src="{{asset("storage/$item->thumbnail")}}" class="img-fluid item__image" alt="">
                                    <div class="nama_paket w-100 p-3 pt-5 text-white">
                                        <div class="h4 mb-0">
                                            {{$item->nama_paket}}
                                        </div>
                                    </div>
                                    <div class="price px-4 py-2">
                                        Rp. {{number_format($item->harga_paket)}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

