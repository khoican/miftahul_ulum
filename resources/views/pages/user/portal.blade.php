@extends('layouts.home')

@section('content')

    <div class="mt-14">
        <div class="h-52 w-full bg-green-600 flex items-center p-20 rounded-lg shadow-lg">
            <h1 class="text-2xl font-semibold text-white uppercase">
                @if(request()->is('prestasi'))
                Prestasi
                @elseif(request()->is('kegiatan'))
                Kegiatan
                @endif
            </h1>
        </div>

        <div class="mt-5 flex gap-3 flex-wrap w-full">
            @forelse ($portals as $portal)
            <div class="max-w-xl xl:w-[24%] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                @if (request()->is('prestasi'))
                <a href="{{ route('home.detailPrestasi',$portal->slug) }}">
                    <img class="rounded-t-lg" src="{{ asset('storage/prestasi/'.$portal->image) }}" alt="{{ $portal->title }}" />
                @elseif(request()->is('kegiatan'))
                <a href="{{ route('home.detailKegiatan',$portal->slug) }}">
                    <img class="rounded-t-lg" src="{{ asset('storage/kegiatan/'.$portal->image) }}" alt="{{ $portal->title }}" />
                @endif
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-lg font-medium tracking-tight text-gray-900 dark:text-white capitalize">{{ $portal->title }}</h5>
                    </a>
                    <p class="mb-3 font-extralignt text-xs text-gray-500 dark:text-gray-400">{{ $portal->updated_at->diffForHumans() }}</p>
                </div>
            </div>
            @empty
            <p class="text-center text-gray-400">Belum ada kegiatan</p>
            @endforelse
        </div>
    </div>

@endsection
