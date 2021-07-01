<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lulusan extends Model
{
    protected $table = "lulusan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];

        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        } 
}
