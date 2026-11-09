@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="hero flex items-center justify-center h-screen">
    <div class="rounded-2xl bg-gray-900/80 p-10 shadow-xl border-2 border-red-500 max-w-md w-full text-center">
        <h2 class="text-3xl text-red-500 font-bold mb-8">Login</h2>
        <p class="text-white mb-4 italic">"Welcome, Hero. Your story begins here."</p>
        @if(session('error'))
        <div class="bg-red-500/20 rounded-lg p-4 mb-4 border border-red-500">
            <p class="text-red-400">{{ session('error') }}</p>
        </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf
            <input type="text" name="username" class="w-full bg-white/10 text-white placeholder-gray-400 border border-blue-500 rounded-xl shadow-md p-3 mb-4 focus:outline-none focus:border-red-500" placeholder="Masukkan Username">

            <button class="bg-red-600 rounded-xl text-white px-4 py-2 w-full hover:bg-blue-700 cursor-pointer transition">
                Login
            </button>
        </form>
    </div>
</div>
@endsection