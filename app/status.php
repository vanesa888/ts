<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $table = "status";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama'];


        public function kuis()
        {
            return $this->belongsTo(Kuis::class);   
        } 

}
