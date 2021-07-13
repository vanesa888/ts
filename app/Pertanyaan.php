<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = "pertanyaan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kategoritanya_id', 'nama'];

    public function kategori()
    {
    return $this->belongsTo('App\Kategori', 'kategori_id');   
    }    
    public function jawaban()
    {
    return $this->belongsTo(Jawaban::class);   
    }  
    
    public function hasil()
    {
    return $this->hasMany(Hasil::class);   
    }
    public function total()
    {
    return $this->hasMany(Total::class);   
    }

}
