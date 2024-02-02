<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    @include('includes.head')
</head>
<body>
    <div class="flex justify-center items-center h-screen w-screen bg-green-50">
        <main class="w-2/3 md:w-1/3 bg-white p-10 rounded-lg shadow">
            <div class="mb-5">
                <h1 class="text-3xl font-bold">Login</h1>
                <p class="text-sm font-light text-gray-500">Masukkan username dan password anda</p>
            </div>
            <form action="{{ route('proses_login') }}" class="" method="POST">
                @csrf

                @error('login-gagal')
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <span class="font-medium">Login Gagal</span> {{ $message }}
                    </div>
                @enderror

                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username <span class="text-red-500 font-bold">*</span></label>
                    <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="name" required>
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password <span class="text-red-500 font-bold">*</span></label>
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password" required>
                </div>
                <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Login</button>
            </form>
        </main>
    </div>
</body>
</html>
