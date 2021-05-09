<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset_url('css/index.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const API_URL = '{{ site_url('api') }}';
    </script>
    <script src="{{ asset_url('js/index.js') }}"></script>
</head>
<body>

<main>

    @if($msg = cookie('msg'))
        <div class="msg">
            {!! $msg !!}
        </div>
        <script>
            setTimeout(() => document.querySelector('.msg').style.display = 'none', 1500);
        </script>
    @endif

    @getError('error')

    @yield('content')
</main>

</body>
</html>