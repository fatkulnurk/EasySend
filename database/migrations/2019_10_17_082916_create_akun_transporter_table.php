<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkunTransporterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_transporter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('transporter_id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedTinyInteger('role_id');
            $table->rememberToken();
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
        Schema::dropIfExists('akun_transporter');
    }
}