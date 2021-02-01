<?php

namespace App\Http\Controllers\portofolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendidikan;
use App\Http\Resources\PendidikanResource;

use Storage;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pendidikan $pendidikan)
    {
        if (auth()->user()->role == 'admin'){
            $sertifikasi = Pendidikan::latest()->paginate(10);
        }
        else{
            $sertifikasi = auth()->user()->pendidikan;
        }

        return PendidikanResource::collection($pendidikan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pendidikan $pendidikan)
    {
        // $fillable = ['user_id','nama_sd','tahun_sd','tahun_smp','nama_sma','tahun_sma','status','komentar'];
        $request->validate([
            'nama_sd' => ['required'],
            'tahun_sd' => ['required'],
            'nama_smp' => ['required'],
            'tahun_smp' => ['required'],
            'nama_sma' => ['required'],
            'tahun_sma' => ['required']
        ]);
        
        $pendidikan->user_id = auth()->user()->id;
        $pendidikan->nama_sd = $request->get('nama_sd');
        $pendidikan->tahun_sd = $request->get('tahun_sd');
        $pendidikan->nama_smp = $request->get('nama_smp');
        $pendidikan->tahun_smp = $request->get('tahun_smp');
        $pendidikan->nama_sma = $request->get('nama_sma');
        $pendidikan->tahun_sma = $request->get('tahun_sma');
        $pendidikan->save();

        return new PendidikanResource($pendidikan);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Pendidikan $pendidikan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Pendidikan $pendidikan)
    {
        $pendidikan->status = $request->get('status');
        $pendidikan->komentar = $request->get('komentar');      
        $pendidikan->save();
        return new PendidikanResource($pendidikan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Pendidikan $pendidikan)
    {
        if ($pendidikan->status == 'menunggu'){
            return response()->json(['message' => 'tidak dapat menghapus data sebelum diperiksa']);
        }
        else {
            $pendidikan->delete();
            if($pendidikan->bukti && file_exists(storage_path('app/public/' . $pendidikan->gambar))){
                Storage::delete('public/'.$pendidikan->bukti);
            }
        }
        return new PendidikanResource($pendidikan);
    }
}
