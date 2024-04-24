<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;

class DownloadController extends Controller
{
    public function download($filename)
    {
        $filePath = public_path('documents/' . $filename);
        
        if (file_exists($filePath)) {
            return Response::download($filePath);
        } else {
            abort(404, 'File not found');
        }
    }
}
