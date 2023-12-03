@include('admin.layout.header')

@yield('content')

<x-alert />

@yield('datatable')
@include('admin.layout.footer')
