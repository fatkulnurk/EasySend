<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransporterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transporter', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true);
            $table->string('nama');
            $table->string('alamat_kantor');
            $table->string('kontak_1');
            $table->string('kontak_2');
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
        Schema::dropIfExists('transporter');
    }
}
