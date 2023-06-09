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
        Schema::create('balas_chats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idChat')->constrained()
            ->onUpdate('cascade');
            $table->longText('balasan');
            $table->dateTime('sender');
            // $table->foreign('idChat')->references('idChat')->on('chats');
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
        Schema::dropIfExists('balas_chats');
    }
};
