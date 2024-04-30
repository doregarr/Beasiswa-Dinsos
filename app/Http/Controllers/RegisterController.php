<?php

namespace App\Http\Controllers;

use App\Models\User;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function registration(Request $request)
    {
        // Validasi input dari form pendaftaran
        $request->validate([
            'nik'=>'required|string|max:20',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',

        ]);

        // Simpan pengguna baru ke database
        $user = new User();
        $user->id = Uuid::uuid4()->toString();
        $user->nik=$request->nik;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role='user';
        $user->save();

        // Anda dapat menambahkan logika lain di sini, misalnya mengirim email verifikasi, dll.

        // Redirect pengguna setelah berhasil mendaftar
        return redirect()->route('login')->with('success', 'Registration successful. You can now login.');
    }
    function showRegister(){
        return view('registrasi');
    }
}
