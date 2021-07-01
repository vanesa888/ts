<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuis;
use App\Alumni;
use App\status;
use App\kesesuaian;
use App\penghasilan;
use App\masatunggu;
use App\Kepuasan;
use App\kepuasan1;
use App\Dayasaing;
use App\Deskripsi;
use App\Bidangusaha;
use App\Info;
use App\Kesulitan;
use App\Pertimbangan;
use App\Lulusan;
use App\Penilaian;
use App\Hubungan;
use App\Hambatan;
use App\Komunikasi;
use App\jawaban;
class KuisController extends Controller
{
    /**
     * Display a listing of the resource.
     *with('kategori')
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $kate = status::all();
        $dtKuis = Kuis::with('status', 'masatunggu', 'penghasilan', 'kesesuaian');
        return view('Kuis.frkuis', compact('dtKuis'));

    }

    public function Hasil()
    {
       return view('Kuis.Hasilcopy');

    }


    public function create()
    {
        return view('Kuis.datakuis'); 
    }

    public function store(Request $request)
    {
        Kuis::create([
            'status_id' => $request->status_id,
            'penghasilan_id' => $request->penghasilan_id,
            'kesesuaian_id' => $request->kesesuaian_id,
            'kepuasan_id' => $request->kepuasan_id,
            'kepuasan1_id' => $request->kepuasan1_id,
            'deskripsi_id' => $request->deskripsi_id,
            'bidangusaha_id' => $request->bidangusaha_id,
            'info_id' => $request->info_id,
            'kesulitan_id' => $request->kesulitan_id,
            'hambatan_id' => $request->hambatan_id,
            'pertimbangan_id' => $request->pertimbangan_id,
            'penghasilan_id' => $request->penghasilan_id,
            'dayasaing_id' => $request->dayasaing_id,
            'lulusan_id' => $request->lulusan_id,
            'hubungan_id' => $request->hubungan_id,
            'komunikasi_id' => $request->komunikasi_id,
            ]);
        return redirect('datakuis')->with('toast_success', 'Terima Kasih Sudah Mengisi Kuisioner');;    
    }

   public function dataa()
   {
    $pen = Penilaian::all();   
    $perti = Pertimbangan::all();
    $lulusan = Lulusan::all();
    $Hubung = Hubungan::all();
    $komunik = Komunikasi::all();
    $daya = Dayasaing::all();
    $hamba = Hambatan::all();   
    $Kesulit = Kesulitan::all();  
    $info =  Info::all(); 
    $bidus = Bidangusaha::all();   
    $desk = Deskripsi::all();  
    $kepu = Kepuasan::all();  
    $kepu1 = Kepuasan1::all();  
    $kesesu = kesesuaian::all();
    $pengha = penghasilan::all();
    $masa = masatunggu::all();
    $kate = status::all();
    $stt = Kuis::select(Kuis::raw('status_id, count(id) as total'))
               ->groupBy('status_id')
               ->orderBy('status_id', 'asc')
               ->get();
    $matu = Alumni::select(Alumni::raw('masatunggu_id, count(id) as total'))
                 ->groupBy('masatunggu_id')
                 ->orderBy('masatunggu_id', 'asc')
                 ->get();   
    $peng = Kuis::select(Kuis::raw('penghasilan_id, count(id) as total'))
                 ->groupBy('penghasilan_id')
                 ->orderBy('penghasilan_id', 'asc')
                 ->get(); 
    $kese = Kuis::select(Kuis::raw('kesesuaian_id, count(id) as total'))
                 ->groupBy('kesesuaian_id')
                 ->orderBy('kesesuaian_id', 'asc')
                 ->get(); 
    $kp = Kuis::select(Kuis::raw('kepuasan_id, count(id) as total'))
               ->groupBy('kepuasan_id')
               ->orderBy('kepuasan_id', 'asc')
               ->get();  
    $kp1 = Kuis::select(Kuis::raw('kepuasan1_id, count(id) as total'))
               ->groupBy('kepuasan1_id')
               ->orderBy('kepuasan1_id', 'asc')
               ->get();  
    $des = Kuis::select(Kuis::raw('deskripsi_id, count(id) as total'))
               ->groupBy('deskripsi_id')
               ->orderBy('deskripsi_id', 'asc')
               ->get();  
    $bin = Kuis::select(Kuis::raw('bidangusaha_id, count(id) as total'))
               ->groupBy('bidangusaha_id')
               ->orderBy('bidangusaha_id', 'asc')
               ->get();   
    $inf = Kuis::select(Kuis::raw('info_id, count(id) as total'))
               ->groupBy('info_id')
               ->orderBy('info_id', 'asc')
               ->get(); 
    $kesul = Kuis::select(Kuis::raw('kesulitan_id, count(id) as total'))
               ->groupBy('kesulitan_id')
               ->orderBy('kesulitan_id', 'asc')
               ->get();
    $ham = Kuis::select(Kuis::raw('hambatan_id, count(id) as total'))
               ->groupBy('hambatan_id')
               ->orderBy('hambatan_id', 'asc')
               ->get();     
    $per = Kuis::select(Kuis::raw('pertimbangan_id, count(id) as total'))
               ->groupBy('pertimbangan_id')
               ->orderBy('pertimbangan_id', 'asc')
               ->get(); 
    $day = Kuis::select(Kuis::raw('dayasaing_id, count(id) as total'))
               ->groupBy('dayasaing_id')
               ->orderBy('dayasaing_id', 'asc')
               ->get();  
    $lul = Kuis::select(Kuis::raw('lulusan_id, count(id) as total'))
               ->groupBy('lulusan_id')
               ->orderBy('lulusan_id', 'asc')
               ->get();     
    $hub = Kuis::select(Kuis::raw('hubungan_id, count(id) as total'))
               ->groupBy('hubungan_id')
               ->orderBy('hubungan_id', 'asc')
               ->get();                            
    $kom = Kuis::select(Kuis::raw('komunikasi_id, count(id) as total'))
               ->groupBy('komunikasi_id')
               ->orderBy('komunikasi_id', 'asc')
               ->get();  
    // $sm = $kom = jawaban::groupBy('1')
    //            ->orderBy('1', 'asc')
    //            ->get();
    // $m = jawaban::where('jawabana','2')::count();
    // $km = jawaban::where('jawaban','3')::count();
    // $tm = jawaban::where('jawaban','4')->count();
               

    $categories = [];
    $categ = [];
    $catego = [];
    $categor = [];
    $categori = [];
    $categorie = [];
    $sed = [];
    $nib = [];
    $fin = [];
    $lus = [];
    $mah = [];
    $rep = [];
    $yad = [];
    $lu= [];
    $buh = [];
    $mok = [];
    $nep = [];
   
     $data = [];
     $data1 = [];
    $data2 = [];
    $data3 = [];
    $data4 = [];
    $data5 = [];
    $data6 = [];
    $data7 = [];
    $data8 = [];
    $data9 = [];
    $data10 = [];
    $data11= [];
    $data12 = [];
    $data13= [];
    $data14= [];
    $data15 = [];



  foreach ($kate as $kt){
    $categories [] = $kt->nama; 
   }
  foreach ($masa as $ms){
    $categ [] = $ms->nama; 
  } 
  foreach ($pengha as $ph){
    $catego [] = $ph->nama; 
   }
   foreach ($kesesu as $ks){
    $categor [] = $ks->nama; 
   }
   foreach ($kepu as $kep){
    $categori [] = $kep->nama; 
   }
   foreach ($kepu1 as $kep1){
    $categorie [] = $kep1->nama; 
   }
  foreach ($desk as $d){
   $sed [] = $d->nama; 
  }
foreach ($bidus as $b){
 $nib [] = $b->nama; 
}
foreach ($info as $in){
 $fin [] = $in->nama; 
}

foreach ($Kesulit as $kes){
 $lus [] = $kep1->nama; 
}

foreach ($hamba as $h){
 $mah [] = $h->nama; 
}

foreach ($perti as $p){
 $rep [] = $kep1->nama; 
}

foreach ($daya as $ay){
 $yad [] = $ay->nama; 
}

foreach ($lulusan as $l){
 $lu [] = $l->nama; 
}
foreach ($Hubung as $ub){
    $buh [] = $ub->nama; 
   }
   foreach ($komunik as $om){
    $mok [] = $om->nama; 
   }
//    foreach ($pen as $en){
//     $nep [] = $en->nama; 
//    }


  foreach ($stt as $t){
    $data [] = $t->total; 
   }
   foreach ($matu as $mt){
    $data1 [] = $mt->total; 
   } 
   foreach ($peng as $pn){
    $data2 [] = $pn->total; 
   }
   foreach ($kese as $ke){
    $data3 [] = $ke->total; 
   }
   foreach ($kp as $k){
    $data4 [] = $k->total; 
   }
   foreach ($kp1 as $k1){
    $data5 [] = $k1->total; 
   }
   foreach ($des as $s1){
    $data6 [] = $s1->total; 
   }
   foreach ($bin as $bn){
    $data7 [] = $bn->total; 
   }
   foreach ($inf as $f){
    $data8 [] = $f->total; 
   }
   foreach ($kesul as $k2){
    $data9 [] = $k2->total; 
   }

   foreach ($ham as $hm){
    $data10 [] = $hm->total; 
   }
   foreach ($per as $p2){
    $data11 [] = $p2->total; 
   }
   foreach ($day as $d2){
    $data12 [] = $d2->total; 
   }
   foreach ($lul as $ul2){
    $data13 [] = $ul2->total; 
   }
   foreach ($hub as $hb){
    $data14 [] = $hb->total; 
   }
   foreach ($kom as $k2){
    $data15 [] = $k2->total; 
   }
//    foreach ($sm as $ms){
//     $data16 [] = $ms->total; 
//    }
//    foreach ($m as $m1){
//     $data17 [] = $m1->total; 
//    }
//    foreach ($km as $mk){
//     $data18 [] = $mk->total; 
//    }
//    foreach ($tm as $mit){
//     $data19 [] = $mit->total; 
//    }
  
 //dd(json_encode($data16));

    return view('Kuis.Hasilcopy', ['categ'=> $categ, 'data1'=>$data1,'categories'=> $categories, 'data'=>$data, 'categori'=> $categori, 'data4'=>$data4, 'categorie'=> $categorie, 'data5'=>$data5,'sed'=> $sed, 'data6'=>$data6, 'nib'=> $nib, 'data7'=>$data7,'fin'=> $fin, 'data8'=>$data8,'lus'=> $lus, 'data9'=>$data9,'mah'=> $mah, 'data10'=>$data10,'rep'=> $rep, 'data11'=>$data11,'yad'=> $yad, 'data12'=>$data12,'lu'=> $lu, 'data13'=>$data13,'buh'=> $buh, 'data14'=>$data14,'mok'=> $mok, 'data15'=>$data15, 'categor'=> $categor, 'data3'=>$data3, 'catego'=> $catego, 'data2'=>$data2]);
}


    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
