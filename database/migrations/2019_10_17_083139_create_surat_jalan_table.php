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

            $table->timestamp('eta_sampai_garasi')->nullable();
            $table->string('lon')->nullable();
            $table->string('lat')->nullable();
            $table->timestamp('sampai_garasi')->nullable();

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
        Schema::dropIfExists('surat_jalan');
    }
}
