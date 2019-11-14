<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone')->nullable();
            $table->string('country')->default('hk');
            $table->string('region')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();

            $table->timestamps();
        });

        Schema::create('shop_translations', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('shop_id')->unsigned();
            $table->string('locale');
            $table->string('name')->nullable();
            $table->string('address')->nullable();

            $table->unique(['shop_id', 'locale']);
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_translations');
        Schema::dropIfExists('shops');
    }
}
