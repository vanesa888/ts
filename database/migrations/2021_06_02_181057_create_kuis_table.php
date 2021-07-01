<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuis', function (Blueprint $table) {
            $table->id();
            $table->string('status_id', 10);
            $table->string('masatunggu_id', 10);
            $table->string('penghasilan_id', 10);
            $table->string('kesesuaian_id', 15);
            $table->string('kepuasan_id', 15);
            $table->string('kepuasan1_id', 15);
            $table->string('deskripsi_id', 15);
            $table->string('bidangusaha_id', 15);
            $table->string('info_id', 15);
            $table->string('kesulitan_id', 15);
            $table->string('hambatan_id', 15);
            $table->string('pertimbangan_id', 15);
            $table->string('dayasaing_id', 15);
            $table->string('lulusan_id', 15);
            $table->string('hubungan_id', 15);
            $table->string('komunikasi_id', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuis');
    }
}
