<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\NilaiMapel;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Siswa::latest()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        // $siswa->nilai_mapel;
        $nilai_mapel = [];

        foreach($siswa->nilai_mapel as $s){

            $nilai_mapel['id'] = $s->id;
            $nilai_mapel['nama_mapel'] = $s->mapel->nama_mapel;
            $nilai_mapel['rata_rata'] = $s->rata_rata;

            $data[] = $nilai_mapel; 
        }

        return ['siswa' => ['id' => $siswa->id, 'nama' => $siswa->nama],'nilai' => $data];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }

    public function detail_nilai($id, $nilai_id){
        $siswa = Siswa::find($id);
        $detail_nilai = NilaiMapel::find($nilai_id);
        $detail_nilai->siswa;
        $detail_nilai->mapel;
        
        return $detail_nilai;
    }
}
