<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_uses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description', 30);
        });

        Schema::create('language_use', function (Blueprint $table) {
            $table->integer('lang_id');
            $table->integer('use_id');

            $table->primary(['lang_id', 'use_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('l_uses');
        Schema::dropIfExists('language_use');
    }
}
