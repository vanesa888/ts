<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PertanyaanAlumni extends Model
{
    protected $table = "pertanyaan_alumni";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kategoritanya_id', 'nama'];
}
