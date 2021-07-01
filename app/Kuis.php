<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    protected $table = "kuis";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'status_id','penghasilan_id','kesesuaian_id','kepuasan_id', 'kepuasan1_id', 'deskripsi_id','bidangusaha_id','info_id','kesulitan_id','hambatan_id','pertimbangan_id','dayasaing_id','lulusan_id','hubungan_id','komunikasi_id'];
   
        public function status()
        {
            return $this->hasMany(status::class);   
        }
        public function kepuasan()
        {
            return $this->hasMany(Kepuasan::class);   
        }
        public function kepuasan1()
        {
            return $this->hasMany(kepuasan1::class);   
        }
        public function masatunggu()
        {
            return $this->hasMany(masatunggu::class);   
        }
        public function penghasilan()
        {
            return $this->hasMany(penghasilan::class);   
        }
        public function kesesuaian()
        {
            return $this->hasMany(kesesuaian::class);   
        }
        public function deskripsi()
        {
            return $this->hasMany(Deskripsi::class);   
        }
        public function bidangusaha()
        {
            return $this->hasMany(Bidangusaha::class);   
        }
        public function info()
        {
            return $this->hasMany(Info::class);   
        }
        public function kesulitan()
        {
            return $this->hasMany(Kesulitan::class);   
        }
        public function hambatan()
        {
            return $this->hasMany(Hambatan::class);   
        }
        public function pertimbangan()
        {
            return $this->hasMany(Pertimbangan::class);   
        }
        public function dayasaing()
        {
            return $this->hasMany(Dayasaing::class);   
        }
        public function lulusan()
        {
            return $this->hasMany(Lulusan::class);   
        }
        public function penilaian()
        {
            return $this->hasMany(Penilaian::class);   
        }
        public function hubungan()
        {
            return $this->hasMany(Hubungan::class);   
        }
        public function komunikasi()
        {
            return $this->hasMany(Komunikasi::class);   
        }
}



