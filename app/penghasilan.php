<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penghasilan extends Model
{
    protected $table = "penghasilan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];
        
        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        }         
}
