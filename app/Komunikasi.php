<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komunikasi extends Model
{
    protected $table = "komunikasi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];

        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        } 
}
