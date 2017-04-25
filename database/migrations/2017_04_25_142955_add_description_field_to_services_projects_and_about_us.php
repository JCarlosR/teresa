<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescriptionFieldToServicesProjectsAndAboutUs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('services', function($table) {
            $table->string('description')->after('name');
        });
        Schema::table('projects', function($table) {
            $table->string('description')->after('name');
        });
        Schema::table('about_uses', function($table) {
            $table->string('description')->after('user_id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('services', function($table) {
            $table->dropColumn('description');
        });
        Schema::table('projects', function($table) {
            $table->dropColumn('description');
        });
        Schema::table('about_uses', function($table) {
            $table->dropColumn('description');
        });

    }
}
