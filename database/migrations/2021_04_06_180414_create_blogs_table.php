<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('thumbnail_path', 1000)->nullable();
            $table->string('image_path', 1000 )->nullable();
            $table->boolean('is_publish')->default(false);
            $table->date('published_date');

            $table->timestamps();
        });

        Schema::create('blog_translations', function(Blueprint $table){

            $table->increments('id');

            $table->integer('blog_id')->unsigned();
            $table->string('locale', 10)->index();
            $table->string('title', 1000);
            $table->longText('content');

            $table->unique(['blog_id', 'locale']);
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_translations');
        Schema::dropIfExists('blogs');
    }
}
