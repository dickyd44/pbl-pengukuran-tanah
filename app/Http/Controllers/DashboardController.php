<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berkas;
use App\Models\LaporanUkur;
use App\Models\User;
use App\Models\SuratTugas;

class DashboardController extends Controller
{
    public function index() {
        $jumlah_permohonan = Berkas::where('status', 'belum')->count();
        $jumlah_surat_tugas = SuratTugas::where('status', 'belum')->count();
        $jumlah_petugas = User::where('role', 'petugas')->count();
        $jumlah_laporan = LaporanUkur::count();

        return view('pages.dashboard.index', [
            'jumlah_permohonan' => $jumlah_permohonan,
            'jumlah_surat_tugas' => $jumlah_surat_tugas,
            'jumlah_petugas' => $jumlah_petugas,
            'jumlah_laporan' => $jumlah_laporan
        ]);
    }
}
