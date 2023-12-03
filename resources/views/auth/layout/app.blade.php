@include('auth.layout.header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- Include CSS Section -->
    @yield('css')

    <!-- Other head elements go here -->
</head>
<body>
@yield('content')

<x-alert />
@yield('js')

</body>

</html>
@include('auth.layout.footer')
