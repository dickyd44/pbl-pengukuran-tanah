<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratTugas;

class DokumenController extends Controller
{
     public function dokumensurattugas($id)
     {
        $data = SuratTugas::find($id);

        return view('document.surat-tugas',[
            'data' => $data
        ]);
     }
}
