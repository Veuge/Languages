<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stat_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 20);
        });

        Schema::create('github_stats', function (Blueprint $table) {
            $table->integer('lang_id');
            $table->integer('type_id');
            $table->bigInteger('quantity');

            $table->primary(['lang_id', 'type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stat_types');
        Schema::dropIfExists('github_stats');
    }
}
