<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [
        'no_berkas',
        'nama_pemohon',
        'no_hp',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'alamat_lengkap',
        'volume_awal',
        'status',
    ];
}
