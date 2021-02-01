<?php

namespace App\Http\Controllers\portofolio;

use Illuminate\Http\Request;
use App\Models\Karya;
use App\Http\Resources\KaryaResource;
use Storage;

class KaryaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(karya $karya)
    {
        if (auth()->user()->role == 'admin'){
            $sertifikasi = Karya::latest()->paginate(10);
        }
        else{
            $sertifikasi = auth()->user()->karya;
        }

        return Karya::collection($magang);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Karya $karya)
    {
        $request->validate([
            'deskripsi' => ['required'],
            'tanggal' => ['required'],
            'bukti' => ['required'],
            'tautan' => ['required']
        ]);

        $karya->user_id = auth()->user()->id;
        $karya->nama = $request->get('nama');
        $karya->deskripsi = $request->get('deskripsi');
        $karya->tanggal = $request->get('tanggal');
        $karya->bukti = $request->get('bukti');
        $karya->tautan = $request->get('tautan');
        $karya->status = $request->get('status');
        $karya->komentar = $request->get('komentar');

        return new KaryaResource($karya);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Karya $karya)
    {
        return new KaryaResource($karya);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karya $karya)
    {
        $karya->status = $request->get('status');
        $karya->komentar = $request->get('komentar');
        $karya->save();

        return new KaryaResource($karya);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karya $karya)
    {
        if ($karya->status == 'menunggu') {
            return response()->json(['message' => 'tidak dapat menghapus data sebelum diperiksa']);
        } else {
            $karya->delete();
            if ($karya->bukti && file_exists(storage_path('app/public/' . $karya->gambar))) {
                Storage::delete('public/' . $karya->bukti);
            }
        }
        return new KaryaResource($karya);
    }
}
