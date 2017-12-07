<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_states', function (Blueprint $table) {
            $table->increments('id');

            // Owner
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            // Columns (management)
            // tinyint: 1 byte, -128 to +127 / 0 to 255 (unsigned)
            $table->unsignedTinyInteger('sitemap')->default(0);
            $table->unsignedTinyInteger('website')->default(0);
            $table->unsignedTinyInteger('google_analytics')->default(0);
            $table->unsignedTinyInteger('social_media')->default(0);
            $table->unsignedTinyInteger('professional_media')->default(0);
            $table->unsignedTinyInteger('broadcasting')->default(0);

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
        Schema::drop('client_states');
    }
}
