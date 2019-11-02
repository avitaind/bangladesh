<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_centers', function (Blueprint $table) {
            $table->increments('id');
            $table->double('latitude');
            $table->double('longitude');
            $table->timestamps();
        });

        Schema::create('service_center_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_center_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->string('address', 1000);
            $table->string('opening_hour');
            $table->string('phone');
            $table->string('fax');
            $table->string('email');

            $table->unique(['service_center_id', 'locale']);

            $table->foreign('service_center_id')->references('id')->on('service_centers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_center_translations');
        Schema::dropIfExists('service_centers');
    }
}
