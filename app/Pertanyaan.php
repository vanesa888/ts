<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = "pertanyaan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kategori_id', 'nama'];

    public function kategori()
    {
    return $this->belongsTo('App\Kategori', 'kategori_id');   
    }    
    public function Jawaban()
    {
    return $this->hasMany(Jawaban::class);   
    }         
}
