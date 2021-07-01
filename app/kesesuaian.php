<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kesesuaian extends Model
{
    protected $table = "kesesuaian";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];

        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        }         
}
