<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kesulitan extends Model
{
    protected $table = "kesulitan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];

        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        }         
}
