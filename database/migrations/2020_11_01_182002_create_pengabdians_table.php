<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengabdiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengabdians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('judul');
            $table->string('deskripsi')->nullable();
            $table->string('institusi')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('lokasi');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('dana');
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
        Schema::dropIfExists('pengabdians');
    }
}
