<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = "alumni";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'user_id', 'nama', 'jeniskelamin','lahir','lahir_tgl', 'statusnikah', 'nohp', 'email', 'alamat', 'alamatT','peter','tmasuk','lulus', 'ipk', 'masatunggu_id'];

    protected $date = ['lahir_tgl'];

    public function kuis()
    {
        return $this->belongsTo(Kuis::class);   
    } 
    public function user()
    {
       return $this->belongsTo(User::class);
    }  
    public function total()
        {
        return $this->belongsTo(Pertanyaan::class);   
        }
}

