<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_schedules', function (Blueprint $table) {
            $table->increments('id');

            // Client
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->date('starter_date');
            $table->string('coin_type', 3);

            $table->float('total_amount'); // gross
            $table->float('income_tax');

            $table->char('modality', 1); // Quarterly, Monthly
            $table->smallInteger('quotas'); // # times to pay

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
        Schema::drop('payment_schedules');
    }
}
