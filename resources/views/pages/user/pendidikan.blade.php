@extends('layouts.home')

@section('content')

    @if($pendidikan)
    <div class="flex gap-5 mt-5">
        <div class="w-3/6 p-10">
            <img src="{{ asset('storage/pendidikan/'.$pendidikan->logo) }}" alt="" class="w-5/6 mx-auto sticky top-24">
        </div>
        <div class="w-3/6 p-10">
            <p class="text-xs font-light text-green-500">{{ $jenis->name}}</p>
            <h1 class="text-3xl font-semibold capitalize">{{ $pendidikan->title }}</h1>

            <div class="mt-10">
                <img src="{{ asset('storage/pendidikan/'.$pendidikan->photo) }}" alt="" class="w-40 object-cover rounded shadow mx-auto mt-3">
                <p class="text-lg font-medium text-center">{{ $pendidikan->pengurus }}</p>
                <p class="text-xs font-light text-center">Pengurus/Pengasuh</p>
            </div>

            <div class="mt-5 text-justify">
                <p>{!! $pendidikan->body !!}</p>
            </div>

            <div class="mt-10">
                <h3 class="text-xl font-semibold mb-4">Formulir</h3>

                <a href="{{ asset('storage/pendidikan/file/'.$pendidikan->file) }}" class="p-3 rounded-md text-white bg-green-500 capitalize hover:bg-green-700 transition-all duration-100">Unduh Formulir Pendaftaran</a>
            </div>
        </div>
    </div>
    @else
    <p class="mt-10 text-center text-gray-400">Halaman Sedang Dalam Pengembangan</p>
    @endif

@endsection
