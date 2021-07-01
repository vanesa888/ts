<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuisioner extends Model
{
    protected $table = "kuis";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'npm', 'nama', 'jeniskelamin', 'lahir', 'lahir_tgl', 'alamat', 'bekerja', 'alamatkan', 'notelp', 'kodeposkan', 'pertanyaan_id'];
}
