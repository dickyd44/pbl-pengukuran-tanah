<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [
        'id_berkas',
        'id_koordinator',
        'id_petugas',
        'no_surat',
        'tanggal',
        'tugas_koordinator',
        'tugas_petugas',
        'beban_biaya',
        'status',
    ];

    public function berkas(){
        return $this->belongsTo('App\Models\Berkas', 'id_berkas');
    }

    public function koordinator(){
        return $this->belongsTo('App\Models\User', 'id_koordinator');
    }

    public function petugas(){
        return $this->belongsTo('App\Models\User', 'id_petugas');
    }
}
