<nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#">

                <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="" style="width: 82px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item ms-md-4">
                    <a class="nav-link" href="/kontak">Kontak</a>
                </li>
                @if (auth()->user())
                    <li class="nav-item dropdown ms-md-4">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{auth()->user()->name}}
                            @if (auth()->user()->photo_profile)
                                <img src="{{asset("storage/".auth()->user()->photo_profile)}}" style="width: 26px; border-radius: 100px; height: 26px; object-fit: cover;">
                            @endif
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile">Akun saya</a></li>
                            <li><a class="dropdown-item" href="{{route('pesanan.index')}}">Transaksi saya</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item ms-md-4">
                        <a class="nav-link btn btn__primary px-5" href="/login">Login</a>
                    </li>
                @endif
            </ul>
            </div>
        </div>
    </nav>
