<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_tag');
            $table->string('slug');
            $table->timestamps();
        });
        Schema::create('artikel_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_artikel');
            $table->unsignedBigInteger('id_tag');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('artikel_tags');
    }
}
