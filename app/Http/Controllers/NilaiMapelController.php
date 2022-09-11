<?php

namespace App\Http\Controllers;

use App\Models\NilaiMapel;
use Illuminate\Http\Request;

class NilaiMapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validateData = $request->validate([
            'siswa_id' => 'required',
            'mapel_id' => 'required',
            'ls_1' => 'required|numeric|max:100',
            'ls_2' => 'required|numeric|max:100',
            'ls_3' => 'required|numeric|max:100',
            'ls_4' => 'required|numeric|max:100',
            'uh_1' => 'required|numeric|max:100',
            'uh_2' => 'required|numeric|max:100',
            'uts' => 'required|numeric|max:100',
            'uas' => 'required|numeric|max:100',
        ]);

        // perhitungan rata-rata
        $avg_nilai_ls = ($request->ls_1 + $request->ls_2 + $request->ls_3 + $request->ls_4) / 4;
        $avg_nilai_uh = ($request->uh_1 + $request->uh_2) / 2;

        $validateData['rata_rata'] = ($avg_nilai_ls * 15 / 100) + ($avg_nilai_uh * 20 / 100) + ($request->uts * 25 / 100) + ($request->uas * 40 / 100);

        NilaiMapel::create($validateData);

        return 'data nilai mapel berhasil ditambahkan';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NilaiMapel  $nilaiMapel
     * @return \Illuminate\Http\Response
     */
    public function show(NilaiMapel $nilaiMapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NilaiMapel  $nilaiMapel
     * @return \Illuminate\Http\Response
     */
    public function edit(NilaiMapel $nilaiMapel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NilaiMapel  $nilaiMapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NilaiMapel $nilaiMapel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NilaiMapel  $nilaiMapel
     * @return \Illuminate\Http\Response
     */
    public function destroy(NilaiMapel $nilaiMapel)
    {
        //
    }
}
