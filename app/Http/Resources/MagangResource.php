<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MagangResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'deskripsi' => $this->deskripsi,
            'institusi' => $this->institusi,
            'tgl_mulai' => $this->tgl_mulai,
            'tgl_selesai' => $this->tgl_selesai,
            'status' => $this->status,
            'komentar' => $this->komentar,
            'diajukan' => $this->created_at->diffForHumans()
        ];
    }

    public function with($request){
        return ['message' => 'sukses']
    }
}
