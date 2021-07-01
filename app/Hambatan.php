<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hambatan extends Model
{
    protected $table = "hambatan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];

        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        } 
}
