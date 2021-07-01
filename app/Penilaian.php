<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $table = "penilaian";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'sangat', 'menguasai', 'kurang', 'tidak'];

        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        } 
}
