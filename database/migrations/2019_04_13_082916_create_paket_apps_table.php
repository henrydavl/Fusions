<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('harga');
            $table->integer('pages')->default(1);
            $table->integer('duration')->default(1);
            $table->enum('publish', [1, 2]);
            $table->bigInteger('play_id')->nullable();
            $table->enum('connectivity', [1, 2]);
            $table->integer('freeEditPage')->default(1);
            $table->integer('troubleshooting')->default(1);
            $table->enum('storage', [1, 2, 3]);
            $table->enum('offline', [1, 2]);
            $table->enum('online', [1, 2]);
            $table->enum('admin', [1, 2]);
            $table->integer('language')->default(1);
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
        Schema::dropIfExists('paket_apps');
    }
}
