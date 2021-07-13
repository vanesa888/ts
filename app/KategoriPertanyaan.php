<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPertanyaan extends Model
{
    protected $table = "kategori_pertanyaan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'kategoritanya'];
}
