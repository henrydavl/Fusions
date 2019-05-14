<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pesanan_id');
            $table->string('nama');
            $table->string('themeRef');
            $table->bigInteger('color_id');
            $table->text('penjelasan');
            $table->enum('status', [0, 1, 2])->default(0);
            $table->date('deadline')->nullable();
            $table->bigInteger('admin_id')->nullable();
            $table->string('zipData')->nullable();
            $table->string('namaApp')->nullable();
            $table->string('proyekWeb_id')->nullable();
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
        Schema::dropIfExists('proyek_apps');
    }
}
