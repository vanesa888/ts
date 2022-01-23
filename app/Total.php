<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    protected $table = "total";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'user_id', 'pertanyaan_id', 'jawaban_id', 'jumlah'];

        public function jawaban()
        {
        return $this->belongsTo(Jawaban::class);   
        } 
        public function pertanyaan()
        {
        return $this->belongsTo(Pertanyaan::class);   
        }
        public function User()
        {
            return $this->belongsTo(User::class);   
        } 
}
