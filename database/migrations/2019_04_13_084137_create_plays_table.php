<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('price');
            $table->enum('featureGraphics', [1, 2])->default(1);
            $table->integer('shortDesc')->default(40);
            $table->integer('description')->default(2000);
            $table->enum('icon', [1, 2])->default(1);
            $table->integer('screenshot')->default(4);
            $table->integer('country')->default(93);
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
        Schema::dropIfExists('plays');
    }
}
