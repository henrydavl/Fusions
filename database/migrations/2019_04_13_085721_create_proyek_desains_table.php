<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekDesainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek_desains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pesanan_id');
            $table->string('nama');
            $table->text('penjelasan');
            $table->bigInteger('color_id');
            $table->string('link');
            $table->date('deadline')->nullable();
            $table->bigInteger('admin_id')->nullable();
            $table->string('zipData')->nullable();
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
        Schema::dropIfExists('proyek_desains');
    }
}
