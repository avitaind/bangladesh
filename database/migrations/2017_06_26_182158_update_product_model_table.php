<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProductModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_models', function (Blueprint $table) {
            //
            $table->dropColumn('type_id');
            $table->integer('product_id')->unsigned()->after('name_sc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_models', function (Blueprint $table) {
            //
            $table->dropColumn('product_id');
            $table->integer('type_id')->unsigned()->after('name_sc');
        });
    }
}
