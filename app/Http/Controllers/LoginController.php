<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login'); // Mengembalikan view untuk halaman login (misalnya login.blade.php)
    }

    // Memproses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'nik' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('nik', 'password');

        // Memeriksa kredensial pengguna
        if (Auth::attempt($credentials)) {
            // Jika kredensial valid, arahkan ke halaman yang sesuai dengan peran pengguna
            if (auth()->user()->role === 'user') {
                $user = User::where('nik', $request->nik)->first();
$id=$user->id;
$e_id= Crypt::encrypt($id);
                Session::put('nik', $user->nik);
                Session::put('name', $user->name);

                return redirect()->route('userPage', ['id' => $e_id]);
            } else  if (auth()->user()->role === 'admin') {
                return redirect()->route('adminPage');
            }
        } else {
            // Jika kredensial tidak valid, tambahkan pesan kesalahan dan kembali ke halaman login
            return back()->withErrors(['nik' => 'Invalid NIK or password']);
        }
    }
    public function logout(Request $request)
    {
        // Menghapus semua data sesi
        Session::flush();

        // Redirect ke halaman login atau halaman lain yang sesuai
        return redirect('/')->with('success', 'Anda telah berhasil keluar.');
    }
}
