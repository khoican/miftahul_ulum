@extends('layouts.home')

@section('content')

<div class="">

    <div class="flex gap-8 mt-10">
        <div class="w-2/6">
            <img src="{{ asset('assets/images/logo.png') }}" alt="">
        </div>
        <div class="w-4/6">
            <p class="text-green-600">Selamat Datang</p>
            <h1 class="text-4xl font-semibold">Sejarah Singkat YPI Miftahul Ulum</h1>
            <p class="text-gray-500 mt-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime dolor, hic explicabo assumenda facere eveniet incidunt a saepe ipsam consectetur ratione totam quis provident adipisci mollitia veniam impedit exercitationem magni vitae harum, inventore consequatur voluptatum. Magnam dolor aliquid dolorem impedit quisquam sint nesciunt est deserunt animi error ab delectus rerum officiis modi nam, nulla incidunt temporibus ratione! Officia iste id voluptas, accusantium cumque veritatis voluptatem, a quibusdam nihil hic soluta minus at ea porro! Suscipit quisquam, ab beatae amet nihil asperiores ducimus minus fugiat illum laudantium est, temporibus libero dignissimos blanditiis inventore! Ab facilis blanditiis cupiditate minus quod numquam dolorum.</p>
        </div>
    </div>

    <section class="p-5 rounded bg-green-600 text-white w-full mt-20">
        <h1 class="text-xl font-semibold">Pendidikan</h1>
        <p class="text-xs font-light">Beberapa kategori pendidikan yang kami selenggarakan</p>
    </section>

    <div class="mt-5 flex flex-col md:flex-row gap-5 justify-center items-center md:items-stretch w-full">
        <a href="" class="p-5 bg-white rounded shadow flex flex-col justify-center items-center w-2/6">
            <div class="p-10 w-40">
                <img src="{{ asset('assets/images/Asset 1.png') }}" alt="">
            </div>
            <h1 class="font-semibold text-center">Taman Pendidikan Al-Quran</h1>
        </a>
        <a href="" class="p-5 bg-white rounded shadow flex flex-col justify-center items-center w-2/6">
            <div class="p-10 w-40">
                <img src="{{ asset('assets/images/Asset 2.png') }}" alt="">
            </div>
            <h1 class="font-semibold text-center">Taman Kanak-Kanak</h1>
        </a>
        <div class="p-5 bg-white rounded shadow w-2/6 flex flex-col justify-between">
            <div>
                <h1 class="text-lg font-semibold">Pendaftaran</h1>
                <p class="text-xs font-light text-gray-500">Daftarkan diri anda sekarang</p>
            </div>
            <div class="flex flex-col gap-2">
                <a href="" class="p-3 rounded-md text-white bg-green-500 text-xs capitalize hover:bg-green-700 transition-all duration-100">Taman Pendidikan Al-Quran</a>
                <a href="" class="p-3 rounded-md text-white bg-green-500 text-xs capitalize hover:bg-green-700 transition-all duration-100">Taman Kanak-Kanak</a>
            </div>
        </div>
    </div>

    <section class="p-5 rounded bg-green-600 text-white w-full mt-20">
        <h1 class="text-xl font-semibold">Berita Terbaru</h1>
        <p class="text-xs font-light">Kegiatan dan prestasi terbaru</p>
    </section>

    <div class="mt-5 flex gap-5">
        <div class="w-4/6 min-h-64 bg-white rounded shadow p-5">
            <h1 class="text-lg font-semibold">Prestasi</h1>
            <div class="mt-5">
                <a href="" class="w-full">
                    <img src="https://source.unsplash.com/random" alt="" class="max-h-96 w-full object-cover rounded">
                    <div>
                        <h1 class="font-semibold mt-3 capitalize">Santri TPQ Miftahul Ulum Meraih Medali Emas dalam Lomba Tarti Tingkat Provinsi</h1>
                        <p class="text-xs font-light text-gray-400">2 Hari yang lalu</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="w-2/6 min-h-64 bg-white rounded shadow p-5">
            <h1 class="text-lg font-semibold">Kegiatan</h1>

            <div class="mt-5 flex flex-col justify-between">
                <div>
                    <a href="" class="w-full mt-5 flex items-center gap-5">
                        <div class="w-14 p-4 bg-yellow-300 rounded flex flex-col justify-center items-center text-white">
                            <p class="text-lg font-semibold">20</p>
                            <p class="text-xs">Jan</p>
                        </div>
                        <p class="capitalize">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, esse.
                        </p>
                    </a>
                    <a href="" class="w-full mt-5 flex items-center gap-5">
                        <div class="w-14 p-4 bg-yellow-300 rounded flex flex-col justify-center items-center text-white">
                            <p class="text-lg font-semibold">20</p>
                            <p class="text-xs">Jan</p>
                        </div>
                        <p class="capitalize">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, esse.
                        </p>
                    </a>
                    <a href="" class="w-full mt-5 flex items-center gap-5">
                        <div class="w-14 p-4 bg-yellow-300 rounded flex flex-col justify-center items-center text-white">
                            <p class="text-lg font-semibold">20</p>
                            <p class="text-xs">Jan</p>
                        </div>
                        <p class="capitalize">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, esse.
                        </p>
                    </a>
                    <a href="" class="w-full mt-5 flex items-center gap-5">
                        <div class="w-14 p-4 bg-yellow-300 rounded flex flex-col justify-center items-center text-white">
                            <p class="text-lg font-semibold">20</p>
                            <p class="text-xs">Jan</p>
                        </div>
                        <p class="capitalize">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, esse.
                        </p>
                    </a>
                </div>

                <a href="" class="mt-3 p-3 rounded-md text-white bg-green-500 text-xs capitalize hover:bg-green-700 transition-all duration-100">Lihat Semua Kegiatan</a>
            </div>
        </div>
    </div>
</div>

@endsection
