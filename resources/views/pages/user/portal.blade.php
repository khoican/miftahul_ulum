@extends('layouts.home')

@section('content')

    <div class="mt-14">
        <div class="h-52 w-full bg-green-600 flex items-center p-20 rounded-lg shadow-lg">
            <h1 class="text-2xl font-semibold text-white uppercase">Kegiatan</h1>
        </div>

        <div class="mt-5 flex gap-3 flex-wrap w-full">
            <div class="max-w-xl xl:w-[24%] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-lg font-medium tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    </a>
                    <p class="mb-3 font-extralignt text-xs text-gray-500 dark:text-gray-400">2 hari yang lalu</p>
                </div>
            </div>
        </div>
    </div>

@endsection
