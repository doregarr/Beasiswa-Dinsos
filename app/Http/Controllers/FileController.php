<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        return view('file-upload');
    }

    /**
     * Upload file and save file name.
     */
    public function upload(Request $request) {
        $request->validate([
            'file1' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'file2' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'file3' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'file4' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'file5' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'file6' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'file7' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'file8' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'file9' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'file10' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'file11' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'file12' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'file13' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',
            'file14' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx|max:2048',


        ]);

        $fileName1 = time().'1.'.$request->file('file1')->getClientOriginalExtension();
        $fileName2 = time().'2.'.$request->file('file2')->getClientOriginalExtension();
        $fileName3 = time().'3.'.$request->file('file3')->getClientOriginalExtension();
        $fileName4 = time().'4.'.$request->file('file4')->getClientOriginalExtension();
        $fileName5 = time().'5.'.$request->file('file5')->getClientOriginalExtension();
        $fileName6 = time().'6.'.$request->file('file6')->getClientOriginalExtension();
        $fileName7 = time().'7.'.$request->file('file7')->getClientOriginalExtension();
        $fileName8 = time().'8.'.$request->file('file8')->getClientOriginalExtension();
        $fileName9 = time().'9.'.$request->file('file9')->getClientOriginalExtension();
        $fileName10 = time().'10.'.$request->file('file10')->getClientOriginalExtension();
        $fileName11 = time().'11.'.$request->file('file11')->getClientOriginalExtension();
        $fileName12 = time().'12.'.$request->file('file12')->getClientOriginalExtension();
        $fileName13 = time().'13.'.$request->file('file13')->getClientOriginalExtension();
        $fileName14 = time().'14.'.$request->file('file14')->getClientOriginalExtension();

        $request->file('file1')->move(public_path('uploads'), $fileName1);
        $request->file('file2')->move(public_path('uploads'), $fileName2);
        $request->file('file3')->move(public_path('uploads'), $fileName3);
        $request->file('file4')->move(public_path('uploads'), $fileName4);
        $request->file('file5')->move(public_path('uploads'), $fileName5);
        $request->file('file6')->move(public_path('uploads'), $fileName6);
        $request->file('file7')->move(public_path('uploads'), $fileName7);
        $request->file('file8')->move(public_path('uploads'), $fileName8);
        $request->file('file9')->move(public_path('uploads'), $fileName9);
        $request->file('file10')->move(public_path('uploads'), $fileName10);
        $request->file('file11')->move(public_path('uploads'), $fileName11);
        $request->file('file12')->move(public_path('uploads'), $fileName12);
        $request->file('file13')->move(public_path('uploads'), $fileName13);
        $request->file('file14')->move(public_path('uploads'), $fileName14);


        $image = File::create([
            "scan_permohonan1" => $fileName1,
            "scan_permohonan2" => $fileName2,
            "scan_permohonan3" => $fileName3,
            "scan_permohonan4" => $fileName4,
            "scan_permohonan5" => $fileName5,
            "scan_permohonan6" => $fileName6,
            "scan_permohonan7" => $fileName7,
            "scan_permohonan8" => $fileName8,
            "scan_permohonan9" => $fileName9,
            "scan_permohonan10" => $fileName10,
            "scan_permohonan11" => $fileName11,
            "scan_permohonan12" => $fileName12,
            "scan_permohonan13" => $fileName13,
            "scan_permohonan14" => $fileName14,

        ]);

        if ($image) {
            return back()->with('success','Success! File has been uploaded');
        }

        else {
            return back()->with("failed", "Alert! Unable to upload file");
        }
    }
}