<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Berkas;
use Barryvdh\DomPDF\Facade\Pdf;

// use Twilio\Rest\Client;
use App\Models\SuratTugas;
use App\Models\LaporanUkur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class SuratTugasController extends Controller
{
    public function index()
    {
        $items = SuratTugas::all();
        $list_petugas = User::where('role', 'petugas')->get();
        $list_koordinator = User::where('role', 'petugas')->get();
        $list_berkas = Berkas::where('status', 'belum')->get();

        $nosurat = IdGenerator::generate(['table' => 'surat_tugas', 'field' => 'no_surat', 'length' => 5, 'prefix' => 'ST-']);

        return view('pages.surat-tugas.index', [
            'items' => $items,
            'list_petugas' => $list_petugas,
            'list_koordinator' => $list_koordinator,
            'list_berkas' => $list_berkas,
            'nosurat' => $nosurat
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['status'] = 'belum';

        SuratTugas::create($data);

        // Berkas::where('id', $request->id_berkas)->update([
        //     'status' => 'sudah'
        // ]);

        $result = SuratTugas::orderBy('id', 'desc')->first();
        $pdf = PDF::loadView('document.surat-tugas', ['data' => $result]);
        $pdf->setPaper('a4', 'potrait');
        $pdf->save(storage_path('app/documents/') . $result->id . '.pdf');

        $email = $result->petugas->email;
        $subject = 'Surat Tugas';
        $message = 'Surat Tugas';
        $file = storage_path('app/documents/') . $result->id . '.pdf';


        Mail::send('email.surat-tugas', ['data' => $result], function ($message) use ($email, $subject, $file) {
            $message->to($email)->subject($subject);
            $message->attach($file);
        });


        // //WA API
        // $sid = "AC83080c28626e6c7f1f241069825a2cf8";
        // $token = "f54a911e85d4de66eb39e85965254cfa";
        // $twilio = new Client($sid, $token);

        // // Pemohon
        // $message = $twilio->messages
        // ->create("whatsapp:".$result->berkas->no_hp, array(
        //     "from" => "whatsapp:+14155238886",
        //     "body" => "Salam Sejahtera, permohonan pengukuran tanah anda akan dilakukan oleh petugas a/n: ".$result->petugas->nama." dengan no HP : ".$result->petugas->no_hp.". Silahkan hubungi nomor tsb. untuk koordinasi lebih lanjut."
        // ));

        // // Petugas
        // $message = $twilio->messages
        // ->create("whatsapp:".$result->petugas->no_hp, array(
        //     "from" => "whatsapp:+14155238886",
        //     "body" => "Salam Sejahtera, Berdasarkan surat tugas no : ".$result->no_surat.". Anda diminta untuk melakukan pengukuran tanah berdasarkan surat tugas tsb. Silahkan hubungi pemohon yang bersangkutan. Berikut nomor pemohon tsb. ".$result->berkas->no_hp.". Sekian dan Terimakasih atas Kerjasama nya."
        // ));


        return redirect()->route('surat-tugas.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['id_surattugas'] = $id;

        LaporanUkur::create($data);

        SuratTugas::where('id', $id)->update([
            'status' => 'sudah'
        ]);

        return redirect()->route('surat-tugas.index')->with('success', 'Data berhasil diubah');
    }
}
