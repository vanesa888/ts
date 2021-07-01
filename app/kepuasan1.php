<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kepuasan1 extends Model
{
    protected $table = "kepuasan1";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];

        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        } 
}
