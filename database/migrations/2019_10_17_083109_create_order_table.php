<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true);
            $table->unsignedBigInteger('shipper_id');
            $table->unsignedBigInteger('akun_shipper_id');
            $table->string('dari_lat');
            $table->string('dari_lon');
            $table->text('deskripsi_barang');
            $table->string('nomor_kontainer');
            $table->string('nama_kapal')->nullable();
            $table->dateTime('waktu_kirim');
            $table->unsignedInteger('estimasi_berat');
            $table->unsignedTinyInteger('jenis_truck');
            $table->unsignedBigInteger('jumlah_truck');
            $table->unsignedBigInteger('harga');
            $table->boolean('valid');
            $table->softDeletes();
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
        Schema::dropIfExists('order');
    }
}
