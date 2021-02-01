<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publikasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrianed();
            $table->string('judul');
            $table->enum('kategori',['makalah','jurnal','paper','skripsi','tessis','desertasi','prosiding','lainnya']);
            $table->enum('tingkat',['nasional','internasional']);
            $table->string('tahun');
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
        Schema::dropIfExists('publikasis');
    }
}
