<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="flex">

    <nav class="w-2/12 shadow-md">
        @include('includes.sidebar')
    </nav>

    <main class="w-10/12">
        @yield('content')
    </main>

</body>
</html>
