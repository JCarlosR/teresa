<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescriptionOfServicesProjectsAndQuotesToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->string('services_description');
            $table->string('projects_description');
            $table->string('quotes_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('services_description');
            $table->dropColumn('projects_description');
            $table->dropColumn('quotes_description');
        });
    }
}
