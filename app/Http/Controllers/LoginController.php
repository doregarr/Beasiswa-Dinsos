<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi data yang dikirimkan oleh form login
        $credentials = $request->validate([
            'nik' => 'required',
            'password' => 'required',
        ]);

        // Coba melakukan proses autentikasi
        $user = User::where('nik', $credentials['nik'])->first(); // Ambil pengguna dari database

        if ($user && Auth::attempt($credentials)) {
            // Redirect ke halaman sesuai peran pengguna
            if ($user->role == 'admin') {
                return redirect('adminPage');
            } elseif ($user->role == 'user') {
                return redirect()->route('index1');
            }
        }else {
            // Jika autentikasi gagal, kembalikan ke halaman login dengan pesan error
            return redirect()->route('login')->with('Gagal', 'NIK atau Password Salah');
        }
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
