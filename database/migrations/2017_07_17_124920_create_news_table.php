<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');

            $table->string('slug')->nullable()->unique();
            $table->string('thumbnail_path', 1000)->nullable();
            $table->string('image_path', 1000 )->nullable();
            $table->string('status')->index();
            $table->boolean('is_publish')->default(false);
            $table->boolean('is_feature')->default(false);
            $table->datetime('start_date');
            $table->datetime('end_date')->nullable();

            $table->timestamps();
        });

        Schema::create('news_translations', function(Blueprint $table){

            $table->increments('id');

            $table->integer('news_id')->unsigned();
            $table->string('locale', 10)->index();
            $table->string('title', 1000);
            $table->longText('content');

            $table->unique(['news_id', 'locale']);
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
        Schema::dropIfExists('news_translations');
        Schema::dropIfExists('news');
    }
}
