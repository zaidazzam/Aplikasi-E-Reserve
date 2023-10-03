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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_invoice')->unique();
            $table->unsignedBigInteger('homestay_id');
            $table->foreign('homestay_id')->references('id')->on('homestays')->onDelete('cascade');
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('biaya_admin');
            $table->integer('total_harga');
            $table->string('nama_depan');
            $table->string('notelp');
            $table->string('email');
            $table->string('bukti_transaksi')->nullable();
            $table->string('no_referensi')->nullable();
            $table->integer('total_masa_inap');
            $table->enum('status_payment', ['pending', 'success', 'failed']);
            $table->enum('status_homestay', ['open', 'close']);
            $table->enum('status_transfer_pemilik', ['sudah', 'belum']);

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
        Schema::dropIfExists('transaksis');
    }
};
