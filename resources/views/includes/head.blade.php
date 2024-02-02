<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta author="Ibnu Khoirul Prasetyo">
<meta description="YPI Miftahul Ulum">
<meta keywords="YPI Miftahul Ulum">
<meta copyright="Ibnu Khoirul Prasetyo">
<meta robots="all">
<meta csrf-token="{{ csrf_token() }}">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="YPI Miftahul Ulum">
<meta name="keywords" content="YPI Miftahul Ulum">
<meta name="copyright" content="Ibnu Khoirul Prasetyo">
<meta name="robots" content="all">
<meta name="author" content="Ibnu Khoirul Prasetyo">

<title>
    @hasSection('title')
        YPI Miftahul Ulum - @yield('title')
    @else
        YPI Miftahul Ulum
    @endif
</title>

<link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo.png') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<script src="{{ asset('build/assets/app-rQmxli1X.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script src="{{ asset('assets/vendor/ckeditor.js') }}"></script>
