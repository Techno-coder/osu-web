<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryStatisticsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->char('country_code', 2);
            $table->integer('mode');
            $table->bigInteger('ranked_score')->default(0);
            $table->bigInteger('play_count')->default(0);
            $table->bigInteger('user_count')->default(0);
            $table->bigInteger('performance')->default(0);
            $table->boolean('display')->default(1);

            $table->timestamps();
            $table->unique(['country_code', 'mode']);
            $table->index(['mode', 'display']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('country_statistics');
    }
}
