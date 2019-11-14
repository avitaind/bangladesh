<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("name")->nullable();
            $table->string('email')->unique();
            $table->string('password');

            $table->string("gender")->nullable();
            $table->timestamp("birthday")->nullable();
            $table->string('profile_pic')->nullable();
            $table->string("country")->nullable();
            $table->string("city")->nullable();
            $table->string("address", 500)->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->boolean('accept_edm')->default(false);

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
