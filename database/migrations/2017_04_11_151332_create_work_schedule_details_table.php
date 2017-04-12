<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkScheduleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_schedule_details', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('work_schedule_id')->unsigned();
            $table->foreign('work_schedule_id')->references('id')->on('work_schedules');

            $table->string('type');

            $table->integer('month_offset'); // 0: the same month, 1: the next
            // it will allow to move all the activities if the start_date of the schedule changes

            $table->smallInteger('state'); // -1: cancelled, 0: pending, 1: performed

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
        Schema::drop('work_schedule_details');
    }
}
