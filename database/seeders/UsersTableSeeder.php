<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => "petugas",
            'nip' => "008",
            'email' => "dickytwillio@gmail.com",
            'password' => Hash::make('petugas'),
            'no_hp' => "+6287773592720",
            'pangkat' => "petugas",
            'jabatan' => "petugas",
            'golongan' => "petugas",
            'role' => "petugas",
        ]);
        DB::table('users')->insert([
            'nama' => "admin",
            'nip' => "009",
            'email' => "anthoniosimbolon10@gmail.com",
            'password' => Hash::make('admin'),
            'no_hp' => "+6287736876422",
            'pangkat' => "admin",
            'jabatan' => "admin",
            'golongan' => "admin",
            'role' => "admin",
        ]);
        DB::table('users')->insert([
            'nama' => "administrator",
            'nip' => "010",
            'email' => "maytreedella@gmail.com",
            'password' => Hash::make('administrator'),
            'no_hp' => "+6285648653265",
            'pangkat' => "administrator",
            'jabatan' => "administrator",
            'golongan' => "administrator",
            'role' => "administrator",
        ]);
    }
}
