@include('user.layout.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YTSEARNING</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('css')
</head>
<body>
@yield('content')

<x-alert />
@yield('js')

</body>

</html>
@include('user.layout.footer')
