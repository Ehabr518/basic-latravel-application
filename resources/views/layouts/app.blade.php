<!DOCTYPE HTML>
<html lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    @include('inc.navbar')
    <div class="container">

        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
            @include('inc.messages')
      <div class="row">
        <div class="col-md-8 col-lg-8">
        @yield('content')
         </div>
         <div class="col-md-4 col-lg-4">
        @include('inc.sidebar')
        </div>
      </div>
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright 2020 &copy; Ehab Reda Abdallah</p>
    </footer>
</body>
</html>
