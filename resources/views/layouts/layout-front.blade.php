<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', "Weeding")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/main.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @stack('addStyle')

    <style>
        .navbar-nav .nav-link.active, .navbar-nav .show>.nav-link {
            color: var(--bs-navbar-active-color);
            font-weight: bold;
        }
    </style>
  </head>
  <body>
    {{-- navbar --}}
    @include('includes.navbar')
    <main>
        <div class="container">

        </div>
         @yield('content')
    </main>

    <footer class="text-center py-3" style="border-top: 1px solid #cccccc;">
        <span class="text-secondary">LIGHT SCAPE VISUAL {{\Carbon\Carbon::now()->format("Y")}}</span>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="{{asset('js/code.jquery.com_jquery-3.6.3.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (Session::get('error'))
        <script>
            Swal.fire({
                icon: "error",
                title: "{{Session::get("error")}}"
            });
        </script>
    @endif

    @if (Session::get('success'))
        <script>
            Swal.fire({
                icon: "success",
                title: "{{Session::get("success")}}"
            });
        </script>
    @endif

    @stack('addScript')
</body>
</html>
