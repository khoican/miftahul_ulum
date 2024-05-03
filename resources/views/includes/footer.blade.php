<footer class="bg-green-700">
    <div class="max-w-screen-xl mx-auto py-10 px-10 flex flex-col md:flex-row justify-between">
        <div class="flex flex-col justify-between">
            <div class="inline-flex gap-5">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" class="h-10">
                <div class="flex flex-col">
                    <span class="text-xs font-light whitespace-nowrap text-white">Yayasan Pendidikan Islam</span>
                    <span class="text-lg font-semibold whitespace-nowrap text-white">Miftahul Ulum</span>
                </div>
            </div>
            <div class="mt-5">
                <h1 class="text-white font-semibold">Kontak Kami</h1>

                <div class="flex gap-3 mt-2">
                    @foreach ($kontaks as $kontak)
                    @if ($kontak->link)
                    <a href="{{ $kontak->link }}">
                        {!! $kontak->icon !!}
                    </a>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="mt-5 md:mt-0">
            <h1 class="text-white font-semibold text-start md:text-end">Halaman Kami</h1>

            <div class="text-start md:text-end text-white flex flex-col text-sm font-light mt-3 md:mt-5">
                <a href="{{ route('home') }}">Beranda</a>

                @foreach ($kategories as $kategori)
                <a href="{{ route('home.pendidikan', $kategori->slug) }}">{{ $kategori->name }}</a>
                @endforeach

                <a href="{{ route('home.prestasi') }}">Prestasi</a>
                <a href="{{ route('home.kegiatan') }}">Kegiatan</a>
            </div>
        </div>
    </div>

    <div class="w-full bg-green-800">
        <div class="max-w-screen-xl mx-auto py-5 px-10">
            <p class="text-white text-sm font-light">Copyright © 2022. All rights reserved.</p>
        </div>
    </div>
</footer>
