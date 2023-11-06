<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_tugas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_berkas');
            $table->integer('id_koordinator');
            $table->integer('id_petugas');
            $table->string('no_surat');
            $table->date('tanggal');
            $table->string('tugas_koordinator');
            $table->string('tugas_petugas');
            $table->string('beban_biaya');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_tugas');
    }
};
