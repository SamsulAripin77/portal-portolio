<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepanitiaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepanitiaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nama');
            $table->string('deskripsi')->nullable();
            $table->string('institusi');
            $table->string('jabatan');
            $table->enum('tingkat',['regional','nasional','internasional']);
            $table->string('no_sk');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('bukti')->nullable();
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
        Schema::dropIfExists('kepanitiaans');
    }
}
