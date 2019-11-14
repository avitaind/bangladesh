<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateWarrantyTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('warranty_terms', function (Blueprint $table) {

            $table->string('title', 1000)->nullable()->after('id');
            //
        });

        Schema::table('warranty_term_translations', function (Blueprint $table) {
            $table->renameColumn('terms', 'message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('warranty_terms', function (Blueprint $table) {
            //
            $table->dropColumn('title');
        });

        Schema::table('warranty_term_translations', function (Blueprint $table) {
            $table->renameColumn('message', 'terms');
        });
    }
}
