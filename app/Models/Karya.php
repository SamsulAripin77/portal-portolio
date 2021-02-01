<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Karya extends Model
{
    use HasFactory;
    protected $with = ['user'];

    protected $fillable = ['nama','deskripsi','tanggal','bukti','tautan','status','komentar'];

    public function user()  {
        return $this->belongsTo(User::class);
    }
}
