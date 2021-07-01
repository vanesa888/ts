<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deskripsi extends Model
{
    protected $table = "deskripsi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];

        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        } 
}
