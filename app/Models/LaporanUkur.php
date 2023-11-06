<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanUkur extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_surattugas',
        'volume',
    ];

    public function surattugas(){
        return $this->belongsTo('App\Models\SuratTugas', 'id_surattugas');
    }
}
