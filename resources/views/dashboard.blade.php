@extends('layouts.app')

@section('content')
<div class="px-6 py-7">

    <div class="dash py-5 px-5 rounded-2xl text-white mb-6 border border-red-500">
        <h2 class="text-2xl font-bold text-red-500">Dashboard</h2>
        <p class="pt-3">Selamat datang, <span class="font-bold text-blue-400">{{ $username }}</span></p>
    </div>

    <div class="px-3 grid grid-cols-1 md:grid-cols-3 rounded-2xl bg-gray-900">
        @foreach($statistik as $item)
        <div class="bg-white p-5 rounded-xl shadow border-2 border-red-500 hover:border-blue-600 transition m-5">
            <h3 class="text-red-600 text-xl font-bold">{{ $item['judul'] }} :</h3>
            <p class="text-2xl font-bold mt-2 text-gray-800">{{ $item['nilai'] }}</p>

            <div class="flex justify-end">
                <p class="text-sm text-white p-1 bg-blue-700 px-3 rounded-2xl hover:bg-red-600 transition">
                    {{ $item['status'] }}
                </p>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
