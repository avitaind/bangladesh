<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCountryNewsMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_news_map', function (Blueprint $table) {

            $table->integer('news_id')->unsigned();
            $table->string('country_code')->index();
            $table->unique(['news_id', 'country_code']);

            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('country_news_map');
    }
}
