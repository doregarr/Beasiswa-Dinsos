<?php

namespace App\Http\Controllers;

use App\Models\DataKeluarga;
use Illuminate\Http\Request;
use App\Models\DataKeluaraga;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class UserController extends Controller
{
    public function showUserPage()
    {
        return view('User.userPage');
    }
    public function storeDataKeluarga(Request $request)
    {
        $request->validate([
        'id'=>'string|max:20',
        'nik'=>'string|max:20',
        'nama' => 'string|max:255',
        'statusOrangTua' => 'string|in:Lengkap,Yatim,Piatu,Yatim-Piatu',
        'statusPernikahan' => 'string|in:Kawin,Cerai Hidup,Cerai Mati',
        'namaAyah' => 'string|max:255',
        'pekerjaanAyah' => 'string|max:255',
        'namaIbu' => 'string|max:255',
        'pekerjaanIbu' => 'string|max:255',
        'alamat' => 'string|max:255',
        'noHP' => 'string|max:255',
        'namaWali' => 'string|max:255',
        'pekerjaanWali' => 'string|max:255',
        'noHPWali' => 'string|max:255',

    ]);
        $loggedInUserNik = Auth::user()->nik;
        $loggedInUserName = Auth::user()->name;
        $loggedInUserId= Auth::user()->id;
        $uuid = Uuid::uuid4(Uuid::NAMESPACE_DNS,$loggedInUserId)->toString();

        $user = new DataKeluarga();
        $user->id = $uuid;
        $user->nik=$loggedInUserNik;
        $user->nama = $loggedInUserName;
        $user->statusOrangtua = $request->statusOrangTua;
        $user->statusPernikahan = $request->statusPernikahan;
        $user->namaAyah = $request->namaAyah;
        $user->pekerjaanAyah = $request->pekerjaanAyah;
        $user->namaIbu  = $request->namaIbu;
        $user->pekerjaanIbu  = $request->pekerjaanIbu;
        $user->alamat  = $request->alamat;
        $user->noHP  = $request->noHP;
        $user->namaWali = $request->namaWali;
        $user->pekerjaanWali = $request->pekerjaanWali;
        $user->noHPWali = $request->noHPWali;

        $user->save();

        return redirect()->route('getDataKeluarga')->with('success', 'Input Data Berhasil.');
    }
    public function getDataKeluarga(){
     return view('user.dataKeluarga');
    }
    public function getDataPribadi(){
        $kecamatan = Kecamatan::all();
        return view('user/dataPribadi', ['kecamatan' => $kecamatan]);

       }
    public function getKecamatan(){
        $kec = Kecamatan::all();
        return view('user.dataPribadi', ['kecamatan' => $kec]);
       }
}
