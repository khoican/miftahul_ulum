@extends('layouts.home')

@section('title', $detail->title)
@section('content')

    <div class="flex flex-col md:flex-row gap-10 w-full mt-14">
        <div class="w-full md:w-4/6">
            <div class="w-5/6 mx-auto">
                @if(request()->is('kegiatan*'))
                <img src="{{ asset('storage/kegiatan/'.$detail->image) }}" alt="" class="object-cover w-full rounded">
                @elseif(request()->is('prestasi*'))
                <img src="{{ asset('storage/prestasi/'.$detail->image) }}" alt="" class="object-cover w-full rounded">
                @endif
            </div>

            <div class="mt-5">
                <h1 class="text-xl font-bold capitalize">{{ $detail->title }}</h1>
                <p class="text-xs font-light text-gray-400">{{ $detail->updated_at->diffForHumans() }}</p>

                <div class="mt-5 font-light text-gray-700 text-justify indent-10">{!! $detail->body !!}</div>
            </div>
        </div>

        <div class="w-full md:w-2/6">
            <h1 class="text-2xl font-semibold">Berita Terbaru</h1>

            <div class="mt-5 flex flex-col justify-center items-center gap-5">
                @forelse ($recomendations as $recomendation)
                <div class="w-5/6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    @if(request()->is('kegiatan*'))
                    <a href="{{ route('home.detailKegiatan',$recomendation->slug) }}">
                        <img class="rounded-t-lg h-52 w-full object-cover" src="{{ asset('storage/kegiatan/'.$recomendation->image) }}" alt="" />
                    @elseif(request()->is('prestasi*'))
                    <a href="{{ route('home.detailPrestasi',$recomendation->slug) }}">
                        <img class="rounded-t-lg h-52 w-full object-cover" src="{{ asset('storage/prestasi/'.$recomendation->image) }}" alt="" />
                    @endif
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-lg font-medium tracking-tight text-gray-900 dark:text-white">{{ $recomendation->title }}</h5>
                        </a>
                        <p class="mb-3 font-extralignt text-xs text-gray-500 dark:text-gray-400">{{ $recomendation->updated_at->diffForHumans() }}</p>
                    </div>
                </div>
                @empty

                @endforelse
            </div>
        </div>
    </div>

@endsection
