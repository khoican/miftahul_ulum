@extends('layouts.home')

@section('content')

<div class="">

    <div class="flex flex-col md:flex-row gap-8 mt-10">
        <div class="md:w-2/6">
            <img src="{{ asset('assets/images/logo.png') }}" alt="">
        </div>
        <div class="md:w-4/6">
            <p class="text-green-600">Selamat Datang</p>
            <h1 class="text-4xl font-semibold">Sejarah Singkat YPI Miftahul Ulum</h1>
            <p class="text-gray-500 mt-5 text-justify">{{ $histori->body }}</p>
        </div>
    </div>

    <section class="p-5 rounded bg-green-600 text-white w-full mt-20">
        <h1 class="text-xl font-semibold">Pendidikan</h1>
        <p class="text-xs font-light">Beberapa kategori pendidikan yang kami selenggarakan</p>
    </section>

    <div class="mt-5 flex flex-col md:flex-row gap-5 justify-center items-center md:items-stretch w-full">

        @if($kategories->count() > 0)

        @foreach($kategories as $kategori)
        <a href="{{ route('home.pendidikan', $kategori->slug) }}"
            class="p-5 bg-white rounded shadow flex flex-col justify-center items-center w-full md:w-2/6">
            <div class="p-10 w-40">
                <img src="{{ asset('storage/kategori/'.$kategori->image) }}" alt="{{ $kategori->name }}">
            </div>
            <h1 class="font-semibold text-center">{{ $kategori->name }}</h1>
        </a>
        @endforeach
        <div class="p-5 bg-white rounded shadow w-full md:w-2/6 flex flex-col justify-between">
            <div>
                <h1 class="text-lg font-semibold">Pendaftaran</h1>
                <p class="text-xs font-light text-gray-500">Daftarkan diri anda sekarang</p>
            </div>
            <div class="flex flex-col gap-2 mt-5">
                @foreach ($pendidikans as $pendidikan)
                <a href="{{ asset('storage/pendidikan/file/'.$pendidikan->file) }}"
                    class="p-3 rounded-md text-white bg-green-500 text-xs capitalize hover:bg-green-700 transition-all duration-100">{{
                    $pendidikan->title }}</a>
                @endforeach
            </div>
        </div>
        @else
        <p class="mt-5 text-center text-gray-400">Belum ada pendidikan</p>
        @endif
    </div>

    <section class="p-5 rounded bg-green-600 text-white w-full mt-20">
        <h1 class="text-xl font-semibold">Berita Terbaru</h1>
        <p class="text-xs font-light">Kegiatan dan prestasi terbaru</p>
    </section>

    <div class="mt-5 flex flex-col md:flex-row gap-5">
        <div class="w-full md:w-4/6 min-h-64 bg-white rounded shadow p-5">
            <h1 class="text-lg font-semibold">Prestasi</h1>
            <div class="mt-5">
                @if($prestasies)
                <a href="{{ route('home.detailPrestasi', $prestasies->slug) }}" class="w-full">
                    <img src="{{ asset('storage/prestasi/'.$prestasies->image) }}" alt="{{ $prestasies->title }}"
                        class="max-h-96 w-full object-cover rounded">
                    <div>
                        <h1 class="font-semibold mt-3 capitalize">{{ $prestasies->title }}</h1>
                        <p class="text-xs font-light text-gray-400">{{ $prestasies->updated_at->diffForHumans() }}</p>
                    </div>
                </a>
                @else
                <p class="text-center text-gray-400">Belum ada prestasi</p>
                @endif
            </div>
        </div>
        <div class="w-full md:w-2/6 min-h-64 bg-white rounded shadow p-5">
            <h1 class="text-lg font-semibold">Kegiatan</h1>

            <div class="mt-5 flex flex-col justify-between">
                <div>
                    @forelse ($kegiatans as $kegiatan)
                    <a href="{{ route('home.detailKegiatan', $kegiatan->slug) }}"
                        class="w-full mt-5 flex items-center gap-5">
                        <div
                            class="w-14 p-4 bg-yellow-300 rounded flex flex-col justify-center items-center text-white">
                            <p class="text-lg font-semibold">{{ $kegiatan->updated_at->format('d') }}</p>
                            <p class="text-xs">{{ $kegiatan->updated_at->format('M') }}</p>
                        </div>
                        <p class="capitalize">
                            {{ $kegiatan->title }}
                        </p>
                    </a>
                    @empty
                    <p class="text-center text-gray-400">Belum ada kegiatan</p>
                    @endforelse
                </div>

                <a href="{{ route('home.kegiatan') }}"
                    class="mt-3 p-3 rounded-md text-white bg-green-500 text-xs capitalize hover:bg-green-700 transition-all duration-100">Lihat
                    Semua Kegiatan</a>
            </div>
        </div>
    </div>
</div>

@endsection
