<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dayasaing extends Model
{
    protected $table = "dayasaing";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];

        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        } 
}
