<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class masatunggu extends Model
{
    protected $table = "masatunggu";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'nilai'];
        
        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        }         
}
