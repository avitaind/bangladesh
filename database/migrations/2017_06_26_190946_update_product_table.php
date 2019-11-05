<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name_en')->nullable()->after('short_code');
            $table->string('name_tc')->nullable()->after('name_en');
            $table->string('name_sc')->nullable()->after('name_tc');
            $table->string('spec_view')->nullable()->after('name_sc');
            $table->string('feature_view')->nullable()->after('spec_view');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['name_en', 'name_tc', 'name_sc', 'spec_view', 'feature_view']);
        });
    }
}
