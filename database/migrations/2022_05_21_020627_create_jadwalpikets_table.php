<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalpiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwalpikets', function (Blueprint $table) {
            $table->id();
            $table->string('hari')->nullable();
            $table->string('nama1')->nullable();
            $table->string('nama2')->nullable();
            $table->string('nama3')->nullable();
            $table->string('nama4')->nullable();
            $table->string('nama5')->nullable();
            $table->string('nama6')->nullable();
            $table->string('nama7')->nullable();
            $table->string('nama8')->nullable();
            $table->string('nama9')->nullable();
            $table->string('nama10')->nullable();
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
        Schema::dropIfExists('jadwalpikets');
    }
}
