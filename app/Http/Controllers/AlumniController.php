<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumni;

class alumniController extends Controller
{
    
    public function index()
    {
        $dtAlumni = Alumni::all();;
        return view('Alumni.formdata', compact('dtAlumni'));
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$dtAlumni = Alumni::tabel('dtAlumni')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('Alumni.formdata',['dtAlumni' => $dtAlumni]);
 
	}

    public function indexx($id)
    {
        $dtAlumni = Alumni::findorfail($id);
        return view('Alumni.detail', compact('dtAlumni'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Alumni.data'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alumni::create([
            'nama' => $request->nama,
            'jeniskelamin' => $request->jeniskelamin,
            'lahir' => $request->lahir,
            'lahir_tgl' => $request->lahir_tgl,
            'statusnikah' => $request->statusnikah,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'alamatT' => $request->alamatT,
            'peter' => $request->peter,
            'tmasuk' => $request->tmasuk,
            'lulus' => $request->lulus,
            'ipk' => $request->alamatkan,
            'masatunggu_id' => $request->masatunggu_id,
            ]);

            return redirect('formdata')->with('toast_success', 'Data Berhasil Tersimpan');
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $Alm = Alumni::findorfail($id);
        return view('Alumni.Edit', compact('Alm'));
       
    }
    public function update(Request $request, $id)
    {
        $Alm = Alumni::findorfail($id);
        $Alm->update($request->all());
        return redirect('formdata')->with('toast_success', 'Data Berhasil Update');
    }

    public function destroy($id)
    {
        //
    }
}
