<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

    @include('includes.sidebar')

    <div class="p-4 sm:ml-64 bg-slate-50 min-h-screen">
        <div class="mt-16 p-4">
            <header class="mb-7">
                <h1 class="text-2xl font-bold uppercase">@yield('title')</h1>
            </header>
            @yield('content')
        </div>
    </div>

</body>
</html>
