<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_media', function (Blueprint $table) {
            $table->increments('id');

            // Owner
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            // Data
            $table->string('name');
            $table->string('url');
            $table->string('notes'); // observations
            $table->smallInteger('state')->unsigned()->default(0); // 0: Not published | 1: Published

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
        Schema::drop('professional_media');
    }
}
