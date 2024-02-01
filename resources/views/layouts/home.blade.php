<!DOCTYPE html>
<html lang="en">
<head>

    @include('includes.head')

</head>
<body class=" bg-green-50" style="scroll-behavior: smooth">

    @if (request()->is('/'))
    <header class="bg-green-100">
        <div class="h-screen mx-auto flex flex-col gap-20 md:flex-row md:justify-between justify-center p-10 lg:p-20 w-full max-w-screen-xl items-center">
            <div class="w-full md:w-5/12">
                <h1 class="text-3xl md:text-5xl font-semibold mb-5">Selamat Datang</h1>
                <p class="text-sm md:text-base font-extralight mb-7">di <span class="font-medium">Yayasan Pendidikan Islam Miftahul Ulum</span> memberikan pendidikan sesuai dengan ajaran Islam</p>
                <a href="#main" class="p-3 rounded-md text-white bg-green-500 text-xs capitalize hover:bg-green-700 transition-all duration-100">jelajahi sekarang</a>
            </div>
            <div class="w-10/12 md:w-8/12 flex justify-center">
                <img src="{{ asset('assets/images/hero.png') }}" alt="" class="w-full">
            </div>
        </div>
    </header>
    @endif

    @include('includes.navbar')

    <div class="mx-auto min-h-screen">
        <main class="p-10 lg:max-w-screen-xl mx-auto" id="main">
            @yield('content')
        </main>
    </div>

    @include('includes.footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const navbar = document.getElementById('navbar')
            const sticky = navbar.offsetTop

            window.onscroll = () => {
                if (window.pageYOffset != sticky) {
                    navbar.classList.add('shadow', 'bg-white')
                } else {
                    navbar.classList.remove('shadow', 'bg-white')
                }
            }

        })
    </script>

</body>
</html>
