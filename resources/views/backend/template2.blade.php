<!doctype html>
<html lang="fr">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('backend.head')
    <title>Document</title>
</head>
<body>
    @include('backend.navbar')
    @include('backend.sidebar')
        <div>
            @yield('content')
        </div>
    @include('backend.footer')
</body>
</html>
