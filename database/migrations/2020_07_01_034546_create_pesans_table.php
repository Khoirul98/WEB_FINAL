<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->string('Nama');
            $table->string('Kode');
            $table->string('Bebek1');
            $table->string('Jumlah1');
            $table->string('Bebek2');
            $table->string('Jumlah2');
            $table->string('Minum1');
            $table->string('Banyak1');
            $table->string('Minum2');
            $table->string('Banyak2');
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
        Schema::dropIfExists('pesans');
    }
}
