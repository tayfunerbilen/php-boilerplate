<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        .has-error {
            border: 2px solid red;
        }
        .error-msg {
            background: orangered;
            color: #fff;
            padding: 5px 10px;
        }
    </style>
</head>
<body>

<main>

    @getError('error')

    @yield('content')
</main>

</body>
</html>