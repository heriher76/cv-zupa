<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutme', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('description')->nullable();
            $table->string('focus1')->nullable();
            $table->string('focus2')->nullable();
            $table->string('focus3')->nullable();
            $table->string('focus4')->nullable();
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
        Schema::dropIfExists('aboutme');
    }
}
