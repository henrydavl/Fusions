<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_webs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('harga');
            $table->enum('freeHosting', [1, 2])->default(1);
            $table->enum('freeDomain', [1, 2])->default(1);
            $table->integer('freeSubdomain')->default(0);
            $table->integer('pages')->default(1);
            $table->integer('seo')->default(1);
            $table->integer('duration')->default(1);
            $table->integer('freeEditPage')->default(1);
            $table->integer('troubleshooting')->default(3);
            $table->enum('responsive', [1, 2])->default(1);
            $table->enum('ftp', [1, 2])->default(1);
            $table->enum('slideshow', [1, 2])->default(1);
            $table->enum('cms', [1, 2])->default(1);
            $table->enum('ssl', [1, 2])->default(1);
            $table->enum('login', [1, 2])->default(1);
            $table->enum('siteSearch', [1, 2])->default(1);
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
        Schema::dropIfExists('paket_webs');
    }
}
