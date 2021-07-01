<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $table = "hasil";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'users_id', 'jawaban_id'];

        public function User()
        {
            return $this->belongsTo(User::class);   
        } 
        public function Jawaban()
        {
            return $this->belongsTo(Jawaban::class);   
        } 
}
