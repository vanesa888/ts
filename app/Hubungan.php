<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hubungan extends Model
{
    protected $table = "hubungan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];

        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        } 
}
