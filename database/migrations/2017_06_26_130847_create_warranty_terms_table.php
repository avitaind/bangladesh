<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarrantyTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warranty_terms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('warranty_term_translations', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('warranty_term_id')->unsigned();
            $table->string('locale')->index();
            $table->longText('terms');

            $table->unique(['warranty_term_id', 'locale']);
            $table->foreign('warranty_term_id')->references('id')->on('warranty_terms')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warranty_term_translations');
        Schema::dropIfExists('warranty_terms');
    }
}
