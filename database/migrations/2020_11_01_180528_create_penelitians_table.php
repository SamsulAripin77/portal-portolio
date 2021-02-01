<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('judul');
            $table->string('deskripsi')->nullable();
            $table->string('institusi')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('tahun');
            $table->string('jabatan');
            $table->enum('dana',['mandiri','pemerintah','swasta']);
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('bukti');
            $table->string('tautan')->nullable();
            $table->enum('status',['menunggu','diterima','ditolak'])->nullable();
            $table->string('komentar')->nullable();
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
        Schema::dropIfExists('penelitians');
    }
}
