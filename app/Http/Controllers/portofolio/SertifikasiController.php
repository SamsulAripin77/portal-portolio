<?php

namespace App\Http\Controllers\portofolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sertifikasi;
use App\Http\Resources\SertifikasiResource;
use Storage;

class SertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Sertifikasi $sertifikasi)
    {

        if (auth()->user()->role == 'admin'){
            $sertifikasi = Sertifikasi::latest()->paginate(10);
        }
        else{
            $sertifikasi = auth()->user()->sertifikasis;
        }

        return SertifikasiResource::collection($sertifikasi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Sertifikasi $sertifikasi)
    {
        $request->validate([
            'nama' => ['required'],
            'deskripsi' => ['required'],
            'institusi' => ['required'],
            'tingkat' => ['required'],
            'tanggal' => ['required'],
            'bukti' => ['required'],
        ]);

        $bukti = $request->file('bukti')->store('bukti/sertifikasi','public');
        $sertifikasi;
 
        $sertifikasi->user_id = auth()->user()->id;
        $sertifikasi->nama =$request->get('nama');
        $sertifikasi->deskripsi =$request->get('deskripsi');
        $sertifikasi->institusi = $request->get('institusi');
        $sertifikasi->tingkat =$request->get('tingkat');
        $sertifikasi->tanggal =$request->get('tanggal');
        $sertifikasi->bukti = $bukti;
   
        $sertifikasi->save();
        return new SertifikasiResource($sertifikasi);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sertifikasi $sertifikasi)
    {
        return new SertifikasiResource($sertifikasi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Sertifikasi $sertifikasi)
    {
        $sertifikasi->status = $request->get('status');
        $sertifikasi->komentar = $request->get('komentar');      
        $sertifikasi->save();
        return new SertifikasiResource($sertifikasi);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sertifikasi $sertifikasi)
    {
        if ($sertifikasi->status == 'menunggu'){
            return response()->json(['message' => 'tidak dapat menghapus data sebelum diperiksa']);
        }
        else {
            $sertifikasi->delete();
            if($sertifikasi->bukti && file_exists(storage_path('app/public/' . $sertifikasi->gambar))){
                Storage::delete('public/'.$sertifikasi->bukti);
            }
        }
        return new SertifikasiResource($sertifikasi);
    }
}
