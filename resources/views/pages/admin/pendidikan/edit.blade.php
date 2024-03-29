@extends('layouts.admin')

@section('title', 'Edit Pendidikan')
@section('content')

<div class="p-5 border border-slate-300 bg-white rounded-lg shadow-lg mb-5">
    <form action="{{ route('pendidikan.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pendidikan <span class="text-red-500 font-bold">*</span></label>
                <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="name" value="{{ old('name', $kategori->name) }}">
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Gambar <span class="text-red-500 font-bold">*</span></label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="image">
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">Silahkan masukkan gambar dengan format JPG, JPEG, PNG, atau SVG</p>
            </div>
            <div class="md:text-end">
                <a href="{{ route('pendidikan') }}" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 w-full sm:w-auto text-center flex justify-center md:inline-block">Batal</a>
                <button type="submit" class="mt-5 text-white lg:ms-3 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
            </div>
        </div>
    </form>
</div>

<div class="p-5 border border-slate-300 bg-white rounded-lg shadow-lg mb-5">
    <form action="{{ route('pendidikan.detail', $pendidikan->id ?? null) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if (isset($pendidikan))
            @method('PUT')
        @endif
        <div>
            <input type="hidden" value="{{ $kategori->id }}" name="kategorisId">
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pendidikan <span class="text-red-500 font-bold">*</span></label>
                <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="title" value="{{ old('title', $pendidikan->title ?? '') }}">
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Logo Pendidikan <span class="text-red-500 font-bold">*</span></label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="logo">
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">Silahkan masukkan gambar dengan format JPG, JPEG, PNG, atau SVG</p>
            </div>
            <div class="mb-6">
                <label for="pengurus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pengurus <span class="text-red-500 font-bold">*</span></label>
                <input type="text" id="pengurus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="pengurus" value="{{ old('pengurus', $pendidikan->pengurus ?? '') }}">
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="photo_input">Foto Pengurus <span class="text-red-500 font-bold">*</span></label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="photo_input" type="file" name="photo">
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">Silahkan masukkan gambar dengan format JPG, JPEG, PNG, atau SVG</p>
            </div>
            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi <span class="text-red-500 font-bold">*</span></label>
                <textarea id="description" name="body">{{ old('description', $pendidikan->body ?? '') }}</textarea>
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="pdf_input">File Penunjang</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="pdf_input" type="file" name="file">
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="file_input_help">Silahkan masukkan file dengan format PDF, DOCX</p>
            </div>
            <div class="md:text-end">
                <a href="{{ route('pendidikan') }}" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 w-full sm:w-auto text-center flex justify-center md:inline-block">Batal</a>
                <button type="submit" class="mt-5 text-white lg:ms-3 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection
