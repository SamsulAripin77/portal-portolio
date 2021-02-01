<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karya extends Model
{
    use HasFactory;
    protected $with = ['<user></user>r></user>r></user>r></user>r></user>'];

    protected $fillable = ['deskripsi','tanggal','bukti','tautan','status','komentar'];

    
}

// $table->string('deskripsi')->nullable();
// $table->date('tanggal');
// $table->string('bukti');
// $table->string('tautan');
// $table->enum('status',['menunggu','diterima','ditolak'])->nullable();
// $table->string('komentar')->nullable();