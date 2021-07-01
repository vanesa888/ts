<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepuasan extends Model
{
    protected $table = "kepuasan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];

        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        } 
}
