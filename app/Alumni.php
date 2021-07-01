<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = "alumni";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'jeniskelamin','lahir','lahir_tgl', 'statusnikah', 'nohp', 'email', 'alamat', 'alamatT','peter','tmasuk','lulus', 'ipk', 'masatunggu_id'];

    protected $date = ['lahir_tgl'];

    public function kuis()
    {
        return $this->belongsTo(Kuis::class);   
    }   
}

