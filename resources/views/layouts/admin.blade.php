<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

    @include('includes.sidebar')

    <div class="p-4 sm:ml-64 bg-slate-50">
        <div class="mt-16 p-4">
            @yield('content')
        </div>
    </div>

</body>
</html>
