<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\Berkas;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Berkas::all();
        $noberkas = IdGenerator::generate(['table' => 'berkas', 'field' => 'no_berkas', 'length' => 5, 'prefix' => 'P-']);

        return view('pages.permohonan.index',[
            "noberkas" => $noberkas,
            'items' => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['status'] = 'belum';

        Berkas::create($data);
        return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Berkas::findOrFail($id);

        $item->update($data);

        return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Berkas::findOrFail($id);
        $item->delete();

        return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil dihapus');
    }
}
