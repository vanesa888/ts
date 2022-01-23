<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuisioner;
use App\Pertanyaan;
Use App\Kategori;
use App\Jawaban;
use App\Hasil;
use App\Total;
class kuisionerController extends Controller
{
      public function index()
    {
    
        $dtJawaban = Jawaban::all();
        $dtKate = Kategori::all();
        $dtTanya = \App\Pertanyaan::with('kategori', 'jawaban')->get(); 
        $dtKuis = Kuisioner::all();           
        return view('Kuisioner.kuissi', compact( 'dtKuis','dtTanya', 'dtKate', 'dtJawaban', 'dtKuis'));
    }
    
    public function hasil()
    {
        return view('Kuisioner.Hasil');
    }

    public function create()
    {
        $dtTanya = Pertanyaan::all();
        $dtJawaban = Jawaban::all();
        return view('Kuisioner.dataKus', compact( 'dtTanya', 'dtJawaban'));
    }

    public function store(Request $request)
    {
        // Kuisioner::create([
        //     'id'=> $request->id,
        //     'kategori_id'=> $request->kategori_id,
        //     'pertanyaan_id'=> $request->pertanyaan_id,
        //     'jawaban_id'=> $request->jawaban_id,

        //     ]);

        //     return redirect('kuissi');  
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        
        $dtJawaban = Jawaban::all();
        $dtTanya = Pertanyaan::findorfail($id);
        return view('Kuisioner.EditKuis', compact('dtJawaban', 'dtTanya'));
    }

    public function update(Request $request, $id)
    { 
       $hasil = Hasil::where([['user_id', '=', auth()->user()->id],
       ['pertanyaan_id', '=', $id]])->first();
        // dd($hasil);
       if ($hasil ){
            
            $dt = [
                'jawaban_id'=> $request->jawaban_id,
            ];
           
            
            $total = Total::where([['pertanyaan_id', '=', $id],
            ['jawaban_id', '=', $hasil->jawaban_id]])->first();
            // dd($total);
            if($total){
                if($total->jawaban_id != $request->jawaban_id){
                    $tambah = new Total;
                    $tambah->pertanyaan_id = $id;
                    $tambah->jawaban_id = $request->jawaban_id;
                    $tambah->jumlah =  1;
                    $tambah->save();

                    $dtKurang = [
                        'jumlah' => $total->jumlah - 1,
                    ];               
                    $total->update($dtKurang);
                }else{
                    $total->jumlah = $total->jumlah + 1;
                    $total->save();

                    $dtKurang = [
                        'jumlah' => $total->jumlah - 1,
                    ];               
                    $total->update($dtKurang);
                }


                

            }else{
            

                $dtKurang = [
                    'jumlah' => $total->jumlah - 1,
                ];               
                $total->update($dtKurang);

            }
    
            $hasil->update($dt);

       }else{
        $total = Total::where([['pertanyaan_id', '=', $id],
        ['jawaban_id', '=', $request->jawaban_id]])->first();
        
        if($total){
            // dd("ada 2");
            $dtKurang = [
                'jumlah' => $total->jumlah + 1,
            ];               
            $total->update($dtKurang);
        }else{
            // dd("tidak ada 2");
            Total::create([
                'pertanyaan_id'=> $id,
                'jawaban_id'=> $request->jawaban_id,
                'jumlah' => 1,
            ]);
        }
            Hasil::create([
                'user_id'=> auth()->user()->id,
                'pertanyaan_id'=> $id,
                'jawaban_id'=> $request->jawaban_id,
            ]);

       }
        
        $total = Total::all();
        return redirect('kuissi')->with('toast_success', 'Kuis Berhasil Diisi');
    }

    public function showpilihan(){
        $pertanyaan = Pertanyaan::all();
        return view ('kuisioner.status', compact('pertanyaan'));
    }
    public function data(Request $request){
        
        
        $tl =  Total::with('jawaban')->where('pertanyaan_id','=', $request->pilihan_id)->get();

        $nama = [];
        $data = [];

        foreach ($tl as $hs){
            $nama [] = $hs->jawaban->pilihjawab; 
           }
           
        foreach ($tl as $l){
            $data [] = $l->jumlah; 
           }

       return view('kuisioner.penghasilan',['nama'=>$nama,'data'=>$data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $Jaw = Jawaban::findorfail($id);
        // $Jaw->delete();
        // return redirect('Kuisioner.kuissi')->with('toast_success', 'Kuis Berhasil Dihapus');
    }
}
