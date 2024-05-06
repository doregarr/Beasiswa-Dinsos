<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\DB;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        return view('user.file-upload');
    }

    /**
     * Upload file and save file name.
     */
    public function upload(Request $request)
    {
        $request->validate([
            'surat_permohonan' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'biodata_pribadi' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'pas_foto' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'kk' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'ktp' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'ktm' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'surat_aktif_kuliah' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'dtks' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'surat_beasiswa' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'surat_orangtua/wali' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'transkrip_nilai' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'tagihan_ukt' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'rekening_bank' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            ]);

        DB::beginTransaction();

        try {
            // Membuat ID unik untuk setiap pengunggahan
            $fileId = uniqid();

            // Array untuk menyimpan nama-nama file
            $fileNames = [];

            // Looping untuk mengunggah dan menyimpan setiap file
            foreach ($request->file() as $fieldName => $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $fileName);

                // Menambahkan nama file ke dalam array
                $fileNames[$fieldName] = $fileName;
            }

        
            File::create(array_merge(['id' => $fileId], $fileNames));

            DB::commit();

            return back()->with('success', 'Success! Files have been uploaded.');
        } 
        catch (\Exception $e) {
            DB::rollback();

            return back()->with("failed", "Alert! Unable to upload files.");
        }
    }
}
