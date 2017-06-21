<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_sections', function (Blueprint $table) {
            $table->increments('id');

            // client owner
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            // section to show
            $table->integer('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('sections');

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
        Schema::drop('client_sections');
    }
}
