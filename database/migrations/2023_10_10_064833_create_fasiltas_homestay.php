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
        Schema::create('fasilitas_homestay', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fasilitas_id');
            $table->foreignId('homestay_id');
            $table->timestamps();

            $table->foreign('homestay_id')->on('homestays')->references('id')->onDelete('cascade');
            $table->foreign('fasilitas_id')->on('fasilitas')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasiltas_homestay');
    }
};
