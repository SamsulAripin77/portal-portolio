<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Sertifikasi extends Model
{
    use HasFactory;

    protected $with = ['user'];

    protected $fillable = ['user_id','nama','deskripsi','institusi','tingkat','tanggal','bukti'];

    public function user(){
    	return	$this->belongsTo(User::class);
    }
}

