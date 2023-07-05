<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title', "Admin")</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/NiceAdmin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/NiceAdmin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/NiceAdmin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/NiceAdmin/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style/admin.css')}}">
    <link rel="stylesheet" href="{{asset('js/lightbox2-2.11.4/src/css/lightbox.css')}}">
    @stack('addStyle')
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{asset('images/logo.png')}}" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

            <span class="d-none d-md-block dropdown-toggle ps-2">{{auth()->user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">


            <li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item ">
        <a class="nav-link collapsed {{request()->is('admin') ? 'active' : ''}}" href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed {{request()->is('admin/paket*') ? 'active' : ''}}" href="{{route('paket.index')}}">
          <i class="bi bi-box2-heart"></i>
          <span>Paket</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed {{request()->is('admin/pesanan-user*') ? 'active' : ''}}" href="{{route('pesanan-user.index')}}">
          <i class="bi bi-cash-coin"></i>
          <span>Pesanan</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed {{request()->is('admin/portofolio*') ? 'active' : ''}}" href="{{route('portofolio.index')}}">
         <i class="bi bi-images"></i>
          <span>Portofolio</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (Session::get('success'))
        <div class="alert alert-success mb-3" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>W</span></strong>. All Rights Reserved
    </div>
    <div class="credits">

    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/NiceAdmin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="/NiceAdmin/assets/vendor/quill/quill.min.js"></script>
  <script src="/NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/NiceAdmin/assets/js/main.js"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
  <script src="{{asset('js/sweetalert.js')}}"></script>
  <script src="{{asset('js/code.jquery.com_jquery-3.6.3.js')}}"></script>
  <script src="{{asset('js/lightbox2-2.11.4/src/js/lightbox.js')}}"></script>
  @stack('addScript')

  @if (Session::get("error"))
      <script>
        Swal.fire({
            icon: 'error',
            title: "{{Session::get('error')}}"
        });
      </script>
  @endif

</body>

</html>
