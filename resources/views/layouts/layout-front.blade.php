<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', "Weeding")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/main.css')}}">
    @stack('addStyle')
  </head>
  <body>
    {{-- navbar --}}
    @include('includes.navbar')
    <main>
        <div class="container">
            @if (Session::get('success'))
                <div class="alert alert-success mb-3" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
         @yield('content')
    </main>

    <footer class="text-center py-3" style="border-top: 1px solid #cccccc;">
        <span class="text-secondary">LIGHT SCAPE VISUAL {{\Carbon\Carbon::now()->format("Y")}}</span>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    @stack('addScript')
</body>
</html>