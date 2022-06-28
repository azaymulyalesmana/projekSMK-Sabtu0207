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
        Schema::create('nilai_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('kode_mapel');
            $table->string('nilai');
            $table->string('id_guru');
            $table->string('id_kelas');
            $table->string('id_semester');
            $table->string('id_tahun_ajaran');
            $table->decimal('nilai_harian1');
            $table->decimal('nilai_harian2');
            $table->decimal('nilai_harian3');
            $table->decimal('nilai_tugas1');
            $table->decimal('nilai_tugas2');
            $table->decimal('nilai_uts');
            $table->decimal('nilai_uas');
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
        Schema::dropIfExists('nilai_siswa');
    }
};
