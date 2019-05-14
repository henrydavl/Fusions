<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek_webs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pesanan_id');
            $table->string('themeRef');
            $table->bigInteger('color_id');
            $table->text('penjelasan');
            $table->enum('status', [0, 1, 2])->default(0);
            $table->date('deadline')->nullable();
            $table->bigInteger('admin_id')->nullable();
            $table->string('zipData')->nullable();
            $table->bigInteger('domain_id')->nullable();
            $table->bigInteger('hosting_id')->nullable();
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
        Schema::dropIfExists('proyek_webs');
    }
}
