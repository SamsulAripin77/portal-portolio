<?php

namespace App\Http\Controllers\portofolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sertifikasi;
use App\Http\Resources\SertifikasiResource;
use App\Http\Resources\SertifikasiCollection;
use Auth;

class SertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sertifikasi = Sertifikasi::latest()->paginate(10);
        return SertifikasiResource::collection($Sertifikasi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = 1;
        $request->validate([
            'nama' => ['required'],
            'deskripsi' => ['required'],
            'institusi' => ['required'],
            'tingkat' => ['required'],
            'tanggal' => ['required'],
            'bukti' => ['required'],
        ]);

        $bukti = $request->file('bukti')->store('bukti/sertifikasi','public');
        $sertifikasi = New Sertifikasi;
 
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
    public function update(Request $request, $id)
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
        $sertifikasi = auth()->user()->sertifikasis()->create([
            'nama' => $request->get('nama'),
            'deskripsi' => $request->get('deskripsi'),
            'institusi' => $request->get('institusi'),
            'tingkat' => $request->get('tingkat'),
            'tanggal' => $request->get('tanggal'),
            'bukti' => $bukti,
        ]);

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
        $sertifikasi->delete();

        return new SertifikasiResource($sertifikasi);
    }
}
