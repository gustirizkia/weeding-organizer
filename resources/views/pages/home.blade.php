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
            <div class="btn btn__primary px-5">
                Mulai
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card card_overview  mx-md-5">
            <div class="d-md-flex align-items-center justify-content-between pe-3 py-3">
                <div class="d-flex align-items-center justify-content-center">
                    <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="62" height="62" rx="12" fill="white"/>
                    <path d="M24.875 43.25C24.4109 43.25 23.9657 43.4344 23.6375 43.7626C23.3094 44.0907 23.125 44.5359 23.125 45V46.75C23.125 47.2141 23.3094 47.6592 23.6375 47.9874C23.9657 48.3156 24.4109 48.5 24.875 48.5C25.3391 48.5 25.7842 48.3156 26.1124 47.9874C26.4406 47.6592 26.625 47.2141 26.625 46.75V45C26.625 44.5359 26.4406 44.0907 26.1124 43.7626C25.7842 43.4344 25.3391 43.25 24.875 43.25ZM24.875 34.5C24.4109 34.5 23.9657 34.6844 23.6375 35.0126C23.3094 35.3408 23.125 35.7859 23.125 36.25V38C23.125 38.4641 23.3094 38.9093 23.6375 39.2374C23.9657 39.5656 24.4109 39.75 24.875 39.75C25.3391 39.75 25.7842 39.5656 26.1124 39.2374C26.4406 38.9093 26.625 38.4641 26.625 38V36.25C26.625 35.7859 26.4406 35.3408 26.1124 35.0126C25.7842 34.6844 25.3391 34.5 24.875 34.5ZM46.75 22.25H45.35C45.1691 21.4648 44.8617 20.7141 44.44 20.0275L45.42 19.0475C45.7067 18.7127 45.8565 18.2821 45.8395 17.8417C45.8225 17.4012 45.6399 16.9834 45.3282 16.6718C45.0166 16.3601 44.5988 16.1775 44.1583 16.1605C43.7179 16.1435 43.2873 16.2933 42.9525 16.58L41.9725 17.56C41.2858 17.1383 40.5352 16.8309 39.75 16.65V15.25C39.75 14.7859 39.5656 14.3408 39.2374 14.0126C38.9092 13.6844 38.4641 13.5 38 13.5C37.5359 13.5 37.0907 13.6844 36.7625 14.0126C36.4344 14.3408 36.25 14.7859 36.25 15.25V16.65C35.4694 16.8282 34.7241 17.1358 34.045 17.56L33.0475 16.58C32.7127 16.2933 32.2821 16.1435 31.8416 16.1605C31.4012 16.1775 30.9834 16.3601 30.6717 16.6718C30.3601 16.9834 30.1775 17.4012 30.1605 17.8417C30.1435 18.2821 30.2933 18.7127 30.58 19.0475L31.56 20.045C31.4025 20.3075 31.28 20.605 31.14 20.885C30.2402 20.631 29.3099 20.5015 28.375 20.5C25.853 20.4986 23.4147 21.4049 21.506 23.0534C19.5973 24.7018 18.3457 26.9822 17.98 29.4775C16.7613 29.8168 15.6777 30.5252 14.8778 31.5052C14.078 32.4853 13.6012 33.6889 13.513 34.9509C13.4247 36.2128 13.7294 37.4711 14.3851 38.5529C15.0408 39.6347 16.0154 40.4869 17.175 40.9925C17.398 41.0809 17.6351 41.1283 17.875 41.1325C18.2796 41.1358 18.6728 40.9988 18.9878 40.7448C19.3027 40.4908 19.52 40.1356 19.6025 39.7395C19.685 39.3434 19.6277 38.9309 19.4404 38.5723C19.253 38.2137 18.9472 37.931 18.575 37.7725C18.1054 37.5725 17.7055 37.2383 17.4253 36.8117C17.145 36.3852 16.9971 35.8853 17 35.375C17 34.6788 17.2765 34.0111 17.7688 33.5188C18.2611 33.0266 18.9288 32.75 19.625 32.75C20.0891 32.75 20.5342 32.5656 20.8624 32.2374C21.1906 31.9092 21.375 31.4641 21.375 31C21.3825 29.3475 21.9744 27.7509 23.0459 26.4928C24.1175 25.2348 25.5996 24.3964 27.2299 24.1261C28.8602 23.8558 30.5335 24.1709 31.9538 25.0158C33.374 25.8607 34.4495 27.1808 34.99 28.7425C35.09 29.0432 35.2698 29.3111 35.5102 29.5176C35.7506 29.7241 36.0426 29.8615 36.355 29.915C37.1678 30.0354 37.925 30.3995 38.5264 30.9594C39.1279 31.5192 39.5453 32.2484 39.7235 33.0505C39.9018 33.8526 39.8325 34.6899 39.5247 35.4518C39.217 36.2136 38.6853 36.8642 38 37.3175C37.8069 37.4439 37.6407 37.6071 37.5107 37.7977C37.3807 37.9884 37.2896 38.2028 37.2424 38.4286C37.1953 38.6545 37.1931 38.8875 37.236 39.1142C37.2789 39.3409 37.3661 39.557 37.4925 39.75C37.6189 39.943 37.7821 40.1093 37.9727 40.2393C38.1634 40.3693 38.3777 40.4604 38.6036 40.5075C38.8295 40.5547 39.0625 40.5568 39.2892 40.5139C39.5159 40.471 39.7319 40.3839 39.925 40.2575C40.957 39.556 41.8002 38.611 42.3802 37.506C42.9601 36.4011 43.2588 35.1703 43.25 33.9225C43.2484 32.9932 43.0703 32.0727 42.725 31.21L42.9525 31.42C43.2784 31.7433 43.7184 31.9256 44.1775 31.9275C44.4078 31.9288 44.6361 31.8847 44.8493 31.7976C45.0625 31.7105 45.2565 31.5822 45.42 31.42C45.7459 31.0921 45.9289 30.6486 45.9289 30.1862C45.9289 29.7239 45.7459 29.2804 45.42 28.9525L44.44 27.9725C44.8617 27.2859 45.1691 26.5352 45.35 25.75H46.75C47.2141 25.75 47.6592 25.5656 47.9874 25.2374C48.3156 24.9092 48.5 24.4641 48.5 24C48.5 23.5359 48.3156 23.0908 47.9874 22.7626C47.6592 22.4344 47.2141 22.25 46.75 22.25ZM40.905 26.8875C40.601 27.1924 40.2455 27.4412 39.855 27.6225C39.284 27.2266 38.6593 26.9143 38 26.695C37.1959 24.9393 35.9322 23.4337 34.3425 22.3375C34.5376 21.8855 34.81 21.4709 35.1475 21.1125C35.9334 20.3856 36.9645 19.9819 38.035 19.9819C39.1055 19.9819 40.1366 20.3856 40.9225 21.1125C41.673 21.8863 42.0927 22.922 42.0927 24C42.0927 25.078 41.673 26.1137 40.9225 26.8875H40.905ZM31.875 41.5C31.4109 41.5 30.9657 41.6844 30.6375 42.0126C30.3094 42.3407 30.125 42.7859 30.125 43.25V45C30.125 45.4641 30.3094 45.9092 30.6375 46.2374C30.9657 46.5656 31.4109 46.75 31.875 46.75C32.3391 46.75 32.7842 46.5656 33.1124 46.2374C33.4406 45.9092 33.625 45.4641 33.625 45V43.25C33.625 42.7859 33.4406 42.3407 33.1124 42.0126C32.7842 41.6844 32.3391 41.5 31.875 41.5ZM31.875 32.75C31.4109 32.75 30.9657 32.9344 30.6375 33.2626C30.3094 33.5908 30.125 34.0359 30.125 34.5V36.25C30.125 36.7141 30.3094 37.1592 30.6375 37.4874C30.9657 37.8156 31.4109 38 31.875 38C32.3391 38 32.7842 37.8156 33.1124 37.4874C33.4406 37.1592 33.625 36.7141 33.625 36.25V34.5C33.625 34.0359 33.4406 33.5908 33.1124 33.2626C32.7842 32.9344 32.3391 32.75 31.875 32.75Z" fill="#D1C1AC"/>
                    </svg>
                    <div class="fw-bold title_overview">
                        Pawang Hujan
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="62" height="62" rx="12" fill="white"/>
                    <path d="M22.25 38C21.9039 38 21.5655 38.1026 21.2778 38.2949C20.99 38.4872 20.7657 38.7605 20.6332 39.0803C20.5008 39.4001 20.4661 39.7519 20.5336 40.0914C20.6011 40.4309 20.7678 40.7427 21.0126 40.9874C21.2573 41.2322 21.5691 41.3988 21.9086 41.4664C22.2481 41.5339 22.5999 41.4992 22.9197 41.3668C23.2395 41.2343 23.5128 41.01 23.7051 40.7222C23.8974 40.4345 24 40.0961 24 39.75C24 39.2859 23.8156 38.8407 23.4874 38.5126C23.1592 38.1844 22.7141 38 22.25 38ZM43.355 31L45.5075 28.8475C46.4907 27.8631 47.0429 26.5288 47.0429 25.1375C47.0429 23.7462 46.4907 22.4119 45.5075 21.4275L40.555 16.4925C39.5706 15.5093 38.2363 14.9571 36.845 14.9571C35.4537 14.9571 34.1194 15.5093 33.135 16.4925L31 18.645C30.9725 17.2709 30.4073 15.9624 29.4257 15.0004C28.4441 14.0384 27.1244 13.4997 25.75 13.5H18.75C17.3576 13.5 16.0223 14.0531 15.0377 15.0377C14.0531 16.0223 13.5 17.3576 13.5 18.75V43.25C13.5 44.6424 14.0531 45.9777 15.0377 46.9623C16.0223 47.9469 17.3576 48.5 18.75 48.5H43.25C44.6424 48.5 45.9777 47.9469 46.9623 46.9623C47.9469 45.9777 48.5 44.6424 48.5 43.25V36.25C48.5003 34.8756 47.9616 33.5559 46.9996 32.5743C46.0376 31.5927 44.7291 31.0275 43.355 31ZM27.5 43.25C27.5 43.7141 27.3156 44.1593 26.9874 44.4874C26.6592 44.8156 26.2141 45 25.75 45H18.75C18.2859 45 17.8408 44.8156 17.5126 44.4874C17.1844 44.1593 17 43.7141 17 43.25V18.75C17 18.2859 17.1844 17.8408 17.5126 17.5126C17.8408 17.1844 18.2859 17 18.75 17H25.75C26.2141 17 26.6592 17.1844 26.9874 17.5126C27.3156 17.8408 27.5 18.2859 27.5 18.75V43.25ZM31 23.58L35.62 18.96C35.9479 18.6341 36.3914 18.4511 36.8538 18.4511C37.3161 18.4511 37.7596 18.6341 38.0875 18.96L43.04 24C43.3659 24.3279 43.5489 24.7714 43.5489 25.2337C43.5489 25.6961 43.3659 26.1396 43.04 26.4675L38 31.5075L31 38.42V23.58ZM45 43.25C45 43.7141 44.8156 44.1593 44.4874 44.4874C44.1593 44.8156 43.7141 45 43.25 45H30.685C30.8645 44.4813 30.9648 43.9386 30.9825 43.39L39.8725 34.5H43.25C43.7141 34.5 44.1593 34.6844 44.4874 35.0126C44.8156 35.3408 45 35.7859 45 36.25V43.25Z" fill="#D1C1AC"/>
                    </svg>
                    <div class="fw-bold title_overview">
                        Desain Website <br> dan Undangan
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="62" height="62" rx="12" fill="white"/>
                    <path d="M43.25 13.5C42.7859 13.5 42.3407 13.6844 42.0126 14.0126C41.6844 14.3408 41.5 14.7859 41.5 15.25V24.805L39.75 25.9775V15.25C39.75 14.7859 39.5656 14.3408 39.2374 14.0126C38.9093 13.6844 38.4641 13.5 38 13.5C37.5359 13.5 37.0908 13.6844 36.7626 14.0126C36.4344 14.3408 36.25 14.7859 36.25 15.25V25.9775L34.5 24.805V15.25C34.5 14.7859 34.3156 14.3408 33.9874 14.0126C33.6592 13.6844 33.2141 13.5 32.75 13.5C32.2859 13.5 31.8408 13.6844 31.5126 14.0126C31.1844 14.3408 31 14.7859 31 15.25V25.75C31.0015 26.0382 31.0742 26.3216 31.2115 26.575C31.3489 26.8284 31.5468 27.044 31.7875 27.2025L36.25 30.195V46.75C36.25 47.2141 36.4344 47.6592 36.7626 47.9874C37.0908 48.3156 37.5359 48.5 38 48.5C38.4641 48.5 38.9093 48.3156 39.2374 47.9874C39.5656 47.6592 39.75 47.2141 39.75 46.75V30.195L44.2125 27.2025C44.4532 27.044 44.6511 26.8284 44.7885 26.575C44.9258 26.3216 44.9985 26.0382 45 25.75V15.25C45 14.7859 44.8156 14.3408 44.4874 14.0126C44.1593 13.6844 43.7141 13.5 43.25 13.5ZM25.75 13.5C23.4294 13.5 21.2038 14.4219 19.5628 16.0628C17.9219 17.7038 17 19.9294 17 22.25V32.75C17 33.2141 17.1844 33.6592 17.5126 33.9874C17.8408 34.3156 18.2859 34.5 18.75 34.5H24V46.75C24 47.2141 24.1844 47.6592 24.5126 47.9874C24.8408 48.3156 25.2859 48.5 25.75 48.5C26.2141 48.5 26.6592 48.3156 26.9874 47.9874C27.3156 47.6592 27.5 47.2141 27.5 46.75V15.25C27.5 14.7859 27.3156 14.3408 26.9874 14.0126C26.6592 13.6844 26.2141 13.5 25.75 13.5ZM24 31H20.5V22.25C20.4994 21.1639 20.8357 20.1043 21.4626 19.2173C22.0894 18.3303 22.976 17.6595 24 17.2975V31Z" fill="#D1C1AC"/>
                    </svg>
                    <div class="fw-bold title_overview">
                        Kue dan Katering
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="62" height="62" rx="12" fill="white"/>
                    <path d="M14.3752 25.5051L30.1252 34.6051C30.3912 34.7587 30.693 34.8396 31.0002 34.8396C31.3074 34.8396 31.6092 34.7587 31.8752 34.6051L47.6252 25.5051C47.8897 25.3524 48.1096 25.1331 48.2631 24.8691C48.4166 24.6051 48.4984 24.3055 48.5002 24.0001C48.5014 23.6917 48.4212 23.3885 48.2675 23.1212C48.1138 22.8538 47.8923 22.6318 47.6252 22.4776L31.8752 13.3951C31.6092 13.2415 31.3074 13.1606 31.0002 13.1606C30.693 13.1606 30.3912 13.2415 30.1252 13.3951L14.3752 22.4776C14.1081 22.6318 13.8866 22.8538 13.7329 23.1212C13.5793 23.3885 13.499 23.6917 13.5002 24.0001C13.502 24.3055 13.5838 24.6051 13.7373 24.8691C13.8908 25.1331 14.1107 25.3524 14.3752 25.5051ZM31.0002 17.0001L43.2502 24.0001L31.0002 31.0001L18.7502 24.0001L31.0002 17.0001ZM45.8752 29.5476L31.0002 38.0001L16.1252 29.4776C15.9255 29.3619 15.7048 29.2868 15.476 29.2568C15.2471 29.2267 15.0145 29.2422 14.7917 29.3024C14.5689 29.3626 14.3601 29.4662 14.1775 29.6074C13.9949 29.7486 13.842 29.9246 13.7277 30.1251C13.4996 30.5269 13.4396 31.0027 13.5609 31.4486C13.6822 31.8944 13.9749 32.2742 14.3752 32.5051L30.1252 41.6051C30.3912 41.7587 30.693 41.8396 31.0002 41.8396C31.3074 41.8396 31.6092 41.7587 31.8752 41.6051L47.6252 32.5051C48.0255 32.2742 48.3182 31.8944 48.4395 31.4486C48.5608 31.0027 48.5009 30.5269 48.2727 30.1251C48.1584 29.9246 48.0055 29.7486 47.8229 29.6074C47.6403 29.4662 47.4316 29.3626 47.2087 29.3024C46.9859 29.2422 46.7533 29.2267 46.5245 29.2568C46.2956 29.2868 46.0749 29.3619 45.8752 29.4776V29.5476ZM45.8752 36.5476L31.0002 45.0001L16.1252 36.4776C15.9255 36.3619 15.7048 36.2868 15.476 36.2568C15.2471 36.2267 15.0145 36.2422 14.7917 36.3024C14.5689 36.3626 14.3601 36.4662 14.1775 36.6074C13.9949 36.7486 13.842 36.9246 13.7277 37.1251C13.4996 37.5269 13.4396 38.0027 13.5609 38.4486C13.6822 38.8944 13.9749 39.2742 14.3752 39.5051L30.1252 48.6051C30.3912 48.7587 30.693 48.8396 31.0002 48.8396C31.3074 48.8396 31.6092 48.7587 31.8752 48.6051L47.6252 39.5051C48.0255 39.2742 48.3182 38.8944 48.4395 38.4486C48.5608 38.0027 48.5009 37.5269 48.2727 37.1251C48.1584 36.9246 48.0055 36.7486 47.8229 36.6074C47.6403 36.4662 47.4316 36.3626 47.2087 36.3024C46.9859 36.2422 46.7533 36.2267 46.5245 36.2568C46.2956 36.2868 46.0749 36.3619 45.8752 36.4776V36.5476Z" fill="#D1C1AC"/>
                    </svg>
                    <div class="fw-bold title_overview">
                        Layanan lainnya
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="mb-4 h2">
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

