<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchitectProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('architect_projects', function (Blueprint $table) {
            $table->increments('id');

            // Project header
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');

            $table->string('architect');
            $table->string('structure');
            $table->string('location');
            $table->float('ground_area');
            $table->float('project_area');
            $table->string('builder');
            $table->integer('floors')->unsigned();
            $table->integer('basements')->unsigned();

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
        Schema::drop('architect_projects');
    }
}
