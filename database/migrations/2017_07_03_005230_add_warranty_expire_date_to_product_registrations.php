<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWarrantyExpireDateToProductRegistrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('product_registrations', function (Blueprint $table) {

            $table->date('warranty_expire_date')->nullable()->after('purchase_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('product_registrations', function (Blueprint $table) {

            $table->dropColumn('warranty_expire_date');

        });
    }
}
