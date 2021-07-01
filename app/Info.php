<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = "info";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];

        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        } 
}
