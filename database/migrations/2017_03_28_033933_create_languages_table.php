<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('release_year');
            $table->boolean('imperative');
            $table->boolean('object_oriented');
            $table->boolean('functional');
            $table->boolean('procedural');
            $table->boolean('generic');
            $table->boolean('reflective');
            $table->boolean('event_driven');
            $table->boolean('standarized');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
