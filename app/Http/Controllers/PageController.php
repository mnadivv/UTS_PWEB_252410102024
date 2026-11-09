<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PageController extends Controller
{
    public function login(): View
    {
        return view('login');
    }

    public function proses(Request $request): RedirectResponse
    {
        $username = $request->input('username');

        if (!$username) {
            return back()->with('error', 'Username wajib diisi!');
        }

        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request): View|RedirectResponse
    {
        $username = $request->input('username');

        if (!$username) {
            return redirect()->route('login.form');
        }

        $statistik = [
            ['judul' => 'Total tayangan', 'nilai' => 900,000,000, 'status' => 'High'],
            ['judul' => 'Menyukai', 'nilai' => 12,000,000, 'status' => 'High'],
            ['judul' => 'Trafik Populer', 'nilai' => 200, 'status' => 'Medium'],
            ['judul' => 'Total Film', 'nilai' => 9, 'status' => 'Low'],
            ['judul' => 'Total Unduhan', 'nilai' => 300.000, 'status' => 'Medium']
        ];

        return view('dashboard', compact('username', 'statistik'));
    }

    public function profile(Request $request): View|RedirectResponse
    {
        $username = $request->input('username');

        if (!$username) {
            return redirect()->route('login.form');
        }

        $bio = [
            ['Alamat' => 'Jember', 'Status' => 'Seorang Bala-bala', 'Fans' => 'Spidy']
        ];

        return view('profile', compact('username', 'bio'));
    }

    public function pengelolaan(Request $request): View|RedirectResponse
    {
        $username = $request->input('username');

        if (!$username) {
            return redirect()->route('login.form');
        }

        $data = [
            ['judul' => 'Spiderman 1', 'deskripsi' => 'Film Series yang Kece'],
            ['judul' => 'Spiderman 2', 'deskripsi' => 'Film Series Kedua yang Menarik'],
            ['judul' => 'Spiderman 3', 'deskripsi' => 'Film Series Ketiga yang Seru']
        ];

        return view('pengelolaan', compact('data', 'username'));
    }

    public function logout(): RedirectResponse
    {
        return redirect()->route('login.form');
    }
}
