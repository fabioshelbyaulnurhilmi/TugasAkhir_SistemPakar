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
        Schema::create('obats', function (Blueprint $table) {
            $table->id();

            $table->string('idObat', 5);
            $table->unsignedBigInteger('idPenyakit')->constrained()
                ->onUpdate('cascade');
            $table->string('namaObat');
            $table->string('gambarObat')->nullable();
            $table->string('cara');
            $table->string('jenis');
            $table->text('khasiat');
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
        Schema::dropIfExists('obats');
    }
};
