<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublishPlaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publish_plays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('proyekApp_id');
            $table->string('featureGraphics')->nullable();
            $table->string('shortDesc');
            $table->text('description');
            $table->string('icon')->nullable();
            $table->string('ss1')->nullable();
            $table->string('ss2')->nullable();
            $table->string('ss3')->nullable();
            $table->string('ss4')->nullable();
            $table->string('ss5')->nullable();
            $table->string('ss6')->nullable();
            $table->string('ss7')->nullable();
            $table->string('ss8')->nullable();
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
        Schema::dropIfExists('publish_plays');
    }
}
