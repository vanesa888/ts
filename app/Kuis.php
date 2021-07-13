<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    protected $table = "kuis";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'status_id','penghasilan_id','kesesuaian_id','kepuasan_id', 'kepuasan1_id', 'deskripsi_id','bidangusaha_id','info_id','kesulitan_id','hambatan_id','pertimbangan_id','dayasaing_id','lulusan_id','hubungan_id','komunikasi_id'];
   
       
}



