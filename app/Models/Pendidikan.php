<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $with = ['user'];
    protected $fillable = ['user_id','nama_sd','tahun_sd','nama_smp','tahun_smp','nama_sma','tahun_sma','status','komentar'];
}