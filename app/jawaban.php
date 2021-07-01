<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jawaban extends Model
{
    protected $table = "jawaban";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'pertanyaan_id', 'jawaban'];

        public function Kategori()
        {
            return $this->belongsTo(Kategori::class);   
        } 
        public function pertanyaan()
        {
            return $this->belongsTo(Pertanyaan::class);   
        } 
}
