<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketDesainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_desains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('catdesain_id');
            $table->bigInteger('tipedesain_id');
            $table->integer('harga');
            $table->integer('tambahanHarga');
            $table->integer('durationFrom')->default(1);
            $table->integer('durationTo')->default(10);
            $table->integer('revisi')->default(1);
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
        Schema::dropIfExists('paket_desains');
    }
}
