<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('client');
            $table->integer('year')->unsigned();
            $table->string('type'); // plain text
            $table->string('duration'); // plain text
            $table->string('status'); // plain text
            $table->text('acknowledgments');

            // SEO questions
            $table->text('question_0'); // title
            $table->text('question_1');
            $table->text('question_2');
            $table->text('question_3');

            // Owner
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->softDeletes();
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
        Schema::drop('projects');
    }
}
