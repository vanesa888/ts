<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Pertanyaan;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtKate = Kategori::with('pertanyaan')->get();
        $dtTanya = Pertanyaan::All();
        return view('Kategori.kategori', compact('dtKate', '$dtTanya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kategori.datakate');
    }

    
    public function store(Request $request)
    {
        Kategori::create([
            'kategori' => $request->kategori,
            ]);
            return redirect('kategori');
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $kt = Kategori::findorfail($id);
        return view('Kategori.Edit', compact('kt'));
    }

   
    public function update(Request $request, $id)
    {
        $kt = Kategori::findorfail($id);
        $kt->update($request->all());
        return redirect('kategori')->with('toast_success', 'Data Berhasil Update');
    }

   
    public function destroy($id)
    {
        //
    }
}
