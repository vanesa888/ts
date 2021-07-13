<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jawaban extends Model
{
    protected $table = "jawaban";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'pertanyaan_id', 'pilihjawab'];

        public function pertanyaan()
        {
            return $this->hasMany(Pertanyaan::class);   
        } 

        public function hasil()
        {
            return $this->hasMany(Hasil::class);   
        }

        public function total()
        {
            return $this->hasMany(Total::class);   
        }
       
} 
