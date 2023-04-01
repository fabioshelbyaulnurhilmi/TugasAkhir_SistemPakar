<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penyakits', function (Blueprint $table) {
            $table->id();
            $table->enum('Buah', ['Mangga','Alpukat','Jambu Biji','Durian','Nangka','Rambutan','Jeruk','Kelengkeng','Anggur','Sawo']);
            $table->enum('Bagian', ['Buah','Batang','Daun','Akar']);
            $table->unsignedBigInteger('idPenyakit')->constrained()
                ->onUpdate('cascade');
            $table->unsignedBigInteger('idGejala')->constrained()
                ->onUpdate('cascade');
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
        Schema::dropIfExists('detail_penyakits');
    }
};
