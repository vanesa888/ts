<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertimbangan extends Model
{
    protected $table = "pertimbangan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];

        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        } 
}
