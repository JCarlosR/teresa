<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteMapLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_map_links', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('description')->nullable();
            $table->string('url');

            $table->integer('site_map_link_id')->unsigned()->nullable();
            $table->foreign('site_map_link_id')->references('id')->on('site_map_links');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::drop('site_map_links');
    }
}
