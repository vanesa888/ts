<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidangusaha extends Model
{
    protected $table = "bidangusaha";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];

        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        } 
}
