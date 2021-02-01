<?php

namespace App\Http\Controllers\portofolio;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Publikasi;
use App\Http\Resources\PublikasiResource;
use Storage;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Publikasi $publikasi)
    {
        if (auth()->user()->role == 'admin'){
            $publikasi = Publikasi::latest()->paginate(10);
        }
        else{
            $publikasi = auth()->user()->publikasi;
        }

        return PublikasiResource::collection($publikasi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Publikasi $publikasi)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Publikasi $publikasi)
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
    public function update(Request $request, Publikasi $publikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publikasi $publikasi)
    {
        //
    }
}
