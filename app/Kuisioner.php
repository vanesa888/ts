<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuisioner extends Model
{
    protected $table = "kuisioner";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','jawaban_id'];

        public function kategori()
        {
            return $this->hasMany(Kategori::class);   
        }
        public function pertanyaan()
        {
            return $this->hasMany(Pertanyaan::class);   
        }
        public function jawaban()
        {
            return $this->hasMany(Jawaban::class);   
        }
}
