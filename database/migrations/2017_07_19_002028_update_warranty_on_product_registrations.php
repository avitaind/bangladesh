<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateWarrantyOnProductRegistrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_registrations', function (Blueprint $table) {
            $table->integer('basic_month')->default(0)->after('warranty_expire_date');
            $table->integer('extra_month')->default(0)->after('basic_month');

            $table->renameColumn('product_id', 'product_model_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_registrations', function (Blueprint $table) {
            //
            $table->dropColumn(['basic_month', 'extra_month']);
            $table->renameColumn('product_model_id', 'product_id');
        });
    }
}
