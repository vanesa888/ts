<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = "biodata";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'npm', 'nama', 'jeniskelamin', 'lahir', 'lahir_tgl', 'alamat', 'nohp', 'email', 'lulus', 'status', 'alamatkan', 'notelp'];
        
    protected $date = ['lahir_tgl'];
}
