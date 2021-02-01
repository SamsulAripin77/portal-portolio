<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    use HasFactory;

    protected $with = ['user'];

    protected $fillable = ['user_id','judul','deskripsi','institusi', 'tgl_mulai','tgl_selesai','status', 'komentar'];

    public function user(){
    	return	$this->belongsTo(User::class);
    }
}
