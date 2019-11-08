<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratJalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_jalan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('akun_transporter_id');
            $table->unsignedBigInteger('transporter_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('order_line_id');
            $table->unsignedBigInteger('shipper_id');
            $table->unsignedBigInteger('armada_id');
            $table->timestamp('keluar_garasi')->nullable();

            $table->timestamp('eta_sampai_lokasi_angkut')->nullable();
            $table->string('lon_1')->nullable();
            $table->string('lat_1')->nullable();
            $table->timestamp('sampai_lokasi_angkut')->nullable();

            $table->timestamp('eta_mulai_loading')->nullable();
            $table->string('lon_2')->nullable();
            $table->string('lat_2')->nullable();
            $table->timestamp('mulai_loading')->nullable();

            $table->timestamp('eta_selesai_loading')->nullable();
            $table->string('lon_3')->nullable();
            $table->string('lat_3')->nullable();
            $table->timestamp('selesai_loading')->nullable();

            $table->timestamp('eta_berangkat_menuju_dropoff')->nullable();
            $table->string('lon_4')->nullable();
            $table->string('lat_4')->nullable();
            $table->timestamp('berangkat_menuju_dropoff')->nullable();

            $table->timestamp('eta_sampai_dropoff')->nullable();
            $table->string('lon_5')->nullable();
            $table->string('lat_5')->nullable();
            $table->timestamp('sampai_dropoff')->nullable();

            $table->timestamp('eta_mulai_unloading')->nullable();
            $table->string('lon_6')->nullable();
            $table->string('lat_6')->nullable();
            $table->timestamp('mulai_unloading')->nullable();

            $table->timestamp('eta_selesai_unloading')->nullable();
            $table->string('lon_7')->nullable();
            $table->string('lat_7')->nullable();
            $table->timestamp('selesai_unloading')->nullable();

            $table->timestamp('eta_menuju_garasi')->nullable();
            $table->string('lon_8')->nullable();
            $table->string('lat_8')->nullable();
            $table->timestamp('menuju_garasi')->nullable();

            $table->timestamp('eta_sampai_garasi')->nullable();
            $table->string('lon_9')->nullable();
            $table->string('lat_9')->nullable();
            $table->timestamp('sampai_garasi')->nullable();

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
        Schema::dropIfExists('surat_jalan');
    }
}
