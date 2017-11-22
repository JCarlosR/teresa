<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('code')->nullable();

            // Client owner
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });

        Schema::table('slides', function (Blueprint $table) {
            $table->integer('slider_id')->unsigned()->nullable();
            $table->foreign('slider_id')->references('id')->on('sliders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slides', function (Blueprint $table) {
            $table->dropForeign(['slider_id']);
            $table->dropColumn('slider_id');
        });

        Schema::drop('sliders');
    }
}
