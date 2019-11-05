<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UdpateNewsTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::statement('ALTER TABLE `news_translations` MODIFY `title` VARCHAR ( 1000 ) NULL, MODIFY `content` LONGTEXT NULL;');

        DB::statement('ALTER TABLE `faq_translations` MODIFY `question` VARCHAR ( 1000 ) NULL, MODIFY `answer` LONGTEXT NULL;');

        DB::statement('ALTER TABLE `warranty_term_translations` MODIFY `message` LONGTEXT NULL;');

        DB::statement('ALTER TABLE `service_center_translations` MODIFY `name` VARCHAR ( 255 ) NULL,
MODIFY `address` VARCHAR ( 1000 ) NULL,
MODIFY `opening_hour` VARCHAR ( 1000 ) NULL,
MODIFY `phone` VARCHAR ( 255 ) NULL,
MODIFY `fax` VARCHAR ( 255 ) NULL,
MODIFY `email` VARCHAR ( 255 ) NULL;');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
