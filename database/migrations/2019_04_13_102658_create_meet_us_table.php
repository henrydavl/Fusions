<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meet_us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dateMeet');
            $table->string('timeMeet');
            $table->string('name');
            $table->string('email');
            $table->enum('methodmeet',['online','offline']);
            $table->string('phoneOrSkype');
            $table->string('placeMeet', 100);
            $table->enum('topic_design', [1, 2]);
            $table->enum('topic_web', [1, 2]);
            $table->enum('topic_app', [1, 2]);
            $table->text('notes')->nullable();
            $table->bigInteger('admin_id')->nullable();
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
        Schema::dropIfExists('meet_us');
    }
}
