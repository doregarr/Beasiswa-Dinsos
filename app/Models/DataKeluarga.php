<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKeluarga extends Model
{
    use HasFactory;
    protected $table='data_keluargas';
    protected $fillable = [
        'id',
        'nik',
        'nama',
        'statusOrangTua',
        'statusPernikahan',
        'namaAyah',
        'pekerjaanAyah',
        'namaIbu',
        'pekerjaanIbu',
        'alamat',
        'noHP',
        'namaWali',
        'pekerjaanWali',
        'noHPWali'
    ];
}
