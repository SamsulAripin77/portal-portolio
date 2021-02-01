<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenghargaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penghargaans', function (Blueprint $table) {
            $table->id();
            //cara baru bikin relasional
            $table->foreignId('user_id')->constrained('users');
            $table->string('nama');
            $table->string('deskripsi');
            $table-> date('tanggal');
            $table->string('institusi');
            $table->enum('tingkat',['regional','nasional','internasional']);
            $table->string('bukti');
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
        Schema::dropIfExists('penghargaans');
    }
}
