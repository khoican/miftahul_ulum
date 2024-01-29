@extends('layouts.home')

@section('content')

    <div class="flex gap-5 mt-5">
        <div class="w-3/6 p-10">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-5/6 mx-auto sticky top-24">
        </div>
        <div class="w-3/6 p-10">
            <p class="text-xs font-light text-green-500">Taman Kanak-Kanak</p>
            <h1 class="text-3xl font-semibold capitalize">TK Miftahul Ulum</h1>

            <div class="mt-10">
                <img src="https://source.unsplash.com/random" alt="" class="w-40 h-40 object-cover rounded shadow mx-auto mt-3">
                <p class="text-lg font-medium text-center">Dimas Ari Muhammad</p>
                <p class="text-xs font-light text-center">Pengurus/Pengasuh</p>
            </div>

            <div class="mt-5 text-justify">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur esse totam fugit fuga dolores quis facere officia est magnam, quibusdam, id vitae distinctio eum tenetur aspernatur inventore autem aliquam dolor possimus ducimus. Maiores esse illo earum, alias cum quia adipisci dicta exercitationem consectetur, quaerat enim fugiat minima odio necessitatibus, modi asperiores hic officiis. Pariatur ea cupiditate natus aliquam amet atque, facilis eum dolorem assumenda nobis autem consectetur enim eius, nihil magnam quod voluptatibus ad molestiae numquam asperiores. Deleniti, molestias repellendus. Porro praesentium atque, suscipit fugiat ipsa minus. Incidunt reiciendis modi, recusandae illo sint excepturi, odit at dicta quo, corporis est voluptate nobis fugiat alias! Dicta, animi. Consequuntur nostrum nobis repellat blanditiis fuga, sapiente delectus soluta, maxime perspiciatis aliquam adipisci cupiditate ullam culpa possimus aperiam tempora sed! Quos magnam perspiciatis minima consequuntur voluptate, pariatur consequatur deserunt at. Earum asperiores consequatur qui, repellendus in deleniti porro suscipit accusantium aspernatur, natus id eveniet.</p>
            </div>

            <div class="mt-10">
                <h3 class="text-xl font-semibold mb-4">Formulir</h3>

                <a href="" class="p-3 rounded-md text-white bg-green-500 capitalize hover:bg-green-700 transition-all duration-100">Unduh Formulir Pendaftaran</a>
            </div>
        </div>
    </div>

@endsection
