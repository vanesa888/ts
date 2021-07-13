<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Kategori;
use App\Jawaban;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $dtTanya = Pertanyaan::with('kategori','jawaban')->get();
        return view('Pertanyaan.Tanya', compact ('dtTanya'));

    }

    public function create()
    {
        $kat = Kategori::all();
        return view('Pertanyaan.dataper', compact ('kat'));
    }

    public function store(Request $request)
    {
        Pertanyaan::create([
            'id' =>$request->id,
            'kategori_id' => $request->kategori_id,
            'nama' => $request->nama,
            'jawaban_id' =>$request->jawaban_id,
            ]);
            return redirect('Tanya');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pt = Pertanyaan::findorfail($id);
        return view('Pertanyaan.Editper', compact('pt'));
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
         $pt = Pertanyaan::findorfail($id);
         $pt->update($request->all());
        return redirect('Tanya')->with('toast_success', 'Pertanyaan Berhasil'); 
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
