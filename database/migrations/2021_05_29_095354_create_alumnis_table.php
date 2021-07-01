<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id();;
            $table->string('nama', 50);
            $table->string('jeniskelamin', 20);
            $table->string('lahir', 20);
            $table->date('lahir_tgl', 15);
            $table->string('statusnikah', 20);
            $table->string('nohp', 15);
            $table->string('email', 30);
            $table->string('alamat', 100);
            $table->string('alamatT', 100);
            $table->string('peter', 20);
            $table->string('tmasuk', 20);
            $table->string('lulus', 20);
            $table->string('tlama', 11);
            $table->string('ipk', 10);
            $table->string('masatunggu_id', 15);
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
        Schema::dropIfExists('alumni');
    }
}
