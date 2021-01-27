<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Sertifikasi extends Model
{
    use HasFactory;

    protected $guards = [];

    protected $fillable = ['nama','deskripsi','institusi','tingkat','tanggal','bukti'];

    public function users(){
    	return	$this->belongsTo(User::class);
    }
}

