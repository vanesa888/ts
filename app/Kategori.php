<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kategori'];

    public function pertanyaan()
    {
    return $this->hasMany('App\Pertanyaan');   
    } 
    public function jawaban()
    {
    return $this->hasMany('App\Jawaban');   
    }      
    public function kuisioner()
    {
    return $this->belongsTo(Kuisioner::class);   
    }  
}
