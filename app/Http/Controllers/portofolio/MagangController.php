<?php

namespace App\Http\Controllers\portofolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Magang;
use App\Http\Resources\MagangResource;
use Storage;

class MagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Magang $magang)
    {
        if (auth()->user()->role == 'admin') {
            $sertifikasi = Magang::latest()->paginate(10);
        } else {
            $sertifikasi = auth()->user()->sertifikasis;
        }

        return MagangResource::collection($sertifikasi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Magang $magang)
    {
        //
        $request->validate([
            'deskripsi' => 'required',
            'institusi' => 'required',
            'tgl_mulai' => 'required',
            'tgl_selesai' => 'required',
            'status' => 'required',
            'komentar' => 'required',
        ]);
        $magang->user_id = auth()->user()->id;
        $magang->deskripsi = $request->get('deskripsi');
        $magang->institusi = $request->get('institusi');
        $magang->tgl_mulai = $request->get('tgl_mulai');
        $magang->tgl_selesai = $request->get('tgl_selesai');
        $magang->status = $request->get('status');
        $magang->komentar = $request->get('komentar');
        $magang->save();
        return new MagangResource($magang);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Magang $magang)
    {
        return new MagangResource($magang);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magang $magang)
    {
        $magang->status = $request->get('status');
        $magang->komentar = $request->get('komentar');
        $magang->save();

        return new MagangResource($magang);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magang $magang)
    {
        if ($magang->status == 'menunggu') {
            return response()->json(['message' => 'tidak dapat menghapus data sebelum diperiksa']);
        } else {
            $magang->delete();
            if ($magang->bukti && file_exists(storage_path('app/public/' . $magang->gambar))) {
                Storage::delete('public/' . $magang->bukti);
            }
        }
        return new MagangResource($magang);
    }
}
