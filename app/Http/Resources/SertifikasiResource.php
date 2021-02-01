<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SertifikasiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'tingkat' => $this->tingkat,
            'institusi' => $this->institusi,
            'tanggal' => $this->tanggal,
            'bukti' => $this->bukti,
            'author_id' => $this->user_id,
            'author' => $this->user->name,
            'diajukan' => $this->created_at->diffForHumans(),
        ];
    }

    public function with($request)
    {
        return ['message' => 'sukses'];
    }
}
