
@extends('layouts.app')

@section('title', 'Pengelolaan Episode')

@section('content')
<div class="px-6 py-7">

    <div class="p-5 rounded-2xl text-white mb-6 shadow border border-red-500"
        style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('images/mainnewyork.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold">Pengelolaan Episode</h2>
                <p class="pt-2">Daftar Series Film Spiderman</p>
                <p class="font-bold text-red-400">Halo, {{ $username }}</p>
            </div>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}"
            class="bg-red-600 px-4 py-2 rounded-3xl shadow hover:bg-red-700 transition">
                + Tambah
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 bg-gray-900 p-5 rounded-2xl">
        @foreach($data as $item)
            <div class="bg-white p-5 rounded-xl border-2 border-red-500 shadow hover:border-blue-600 transition">
                <h3 class="text-red-600 text-xl font-bold mb-4">
                    {{ $item['judul'] }}
                </h3>

                <img src="{{ asset('images/filmspider.png') }}" class="rounded-2xl border-2 border-gray-200 object-cover w-full">

                <p class="text-gray-600 pt-5 text-sm leading-relaxed">
                    {{ $item['deskripsi'] }}
                </p>

                <div class="flex justify-end mt-4">
                    <span class="text-xs px-3 py-1 bg-blue-700 text-white rounded-2xl hover:bg-red-600 transition">
                        Detail
                    </span>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
