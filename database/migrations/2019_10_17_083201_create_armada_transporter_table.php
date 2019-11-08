<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmadaTransporterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armada_transporter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('transporter_id');
            $table->unsignedBigInteger('id_armada');
            $table->unsignedBigInteger('transporter_akun_id');
            $table->string('plat_nomor');
            $table->string('model');
            $table->integer('jenis');
            $table->integer('kapasitas_volume');
            $table->integer('kapasitas_berat');
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
        Schema::dropIfExists('armada_transporter');
    }
}
