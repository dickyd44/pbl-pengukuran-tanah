<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LaporanUkur;

class HasilUkurController extends Controller
{
    public function index()
    {
        $items = LaporanUkur::all();

        return view('pages.hasil-ukur.index',[
            'items' => $items
        ]);
    }
}
