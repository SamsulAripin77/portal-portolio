<?php

namespace App\Http\Controllers\portofolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sertifikasi;
use App\Http\Resources\SertifikasiResource;
use App\Http\Resources\SertifikasiCollection;

class SertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Sertifikasi = Sertifikasi::latest()->paginate(5);
        return new SertifikasiCollection($Sertifikasi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $bukti;
        $request->validate([
            'nama' => ['required'],
            'deskripsi' => ['required'],
            'institusi' => ['required'],
            'tingkat' => ['required'],
            'tanggal' => ['required'],
            'bukti' => ['required'],
        ]);

        if($request->file('bukti')){
            $bukti = $request->file('bukti')->store('bukti/sertifikasi','public');
        }
        
        $sertifikasi = auth()->user()->sertifikasis()->create([
            'nama' => $request->get('nama'),
            'deskripsi' => $request->get('deskripsi'),
            'institusi' => $request->get('institusi'),
            'tingkat' => $request->get('tingkat'),
            'tanggal' => $request->get('tanggal'),
            'bukti' => 'hjghj',
        ]);

        return response()->json(['bukti' => $sertifikasi]);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
