@extends('layouts.admin')

@section('title', 'Prestasi')
@section('content')

<div class="p-5 border border-slate-300 bg-white rounded-lg shadow-lg mb-5">
    <div class="mb-5 md:flex">
        <a href="/prestasi/create" class="p-3 bg-green-500 rounded-lg text-white font-medium hover:bg-green-600 shadow flex items-center gap-2">
            <svg class="w-3 h-3 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
            </svg>
            Tambah Prestasi
        </a>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 w-1/6">
                        Gambar
                    </th>
                    <th scope="col" class="px-6 py-3 w-4/6">
                        Judul Postingan
                    </th>
                    <th scope="col" class="px-6 py-3 w-1/6">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-20 mx-auto rounded">
                    </th>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-wrap">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, iure?
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="inline-flex items-center gap-3 justify-center">
                            <a href="/prestasi/edit" class="p-3 rounded-lg bg-yellow-300 hover:bg-yellow-500 text-white">
                                <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m13.835 7.578-.005.007-7.137 7.137 2.139 2.138 7.143-7.142-2.14-2.14Zm-10.696 3.59 2.139 2.14 7.138-7.137.007-.005-2.141-2.141-7.143 7.143Zm1.433 4.261L2 12.852.051 18.684a1 1 0 0 0 1.265 1.264L7.147 18l-2.575-2.571Zm14.249-14.25a4.03 4.03 0 0 0-5.693 0L11.7 2.611 17.389 8.3l1.432-1.432a4.029 4.029 0 0 0 0-5.689Z"/>
                                </svg>
                            </a>
                            <p class="p-3 rounded-lg bg-red-600 hover:bg-red-800 text-white">
                                <svg class="w-6 h-6 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z"/>
                                </svg>
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
