<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IsiKuis extends Model
{
    protected $table = "isi_kuis";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kategori_id', 'jawabanKuis'];

        public function Kategori()
        {
            return $this->belongsTo(Kategori::class);   
        } 
        // public function pertanyaan()
        // {
        //     return $this->belongsTo(Pertanyaan::class);   
        // } 
}
