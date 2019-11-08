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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('shipper_id');
            $table->unsignedBigInteger('akun_shipper_id');
            $table->string('barang');
            $table->integer('berat');
            $table->integer('volume');
            $table->unsignedBigInteger('jenis_truck');
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
