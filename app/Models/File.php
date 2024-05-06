<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'surat_permohonan', 'biodata_pribadi', 'pas_foto', 'kk', 'ktp', 'ktm', 'surat_aktif_kuliah' , 'dtks', 
        'surat_beasiswa', 'surat_orangtua/wali', 'transkrip_nilai', 'tagihan_ukt', 'rekening_bank',
    ];
}
