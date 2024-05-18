<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function downloadPdf()
    {
        $filePath = 'TestPDFfile.pdf'; // File path in the public folder
        return response()->download(public_path($filePath));
    }
}
