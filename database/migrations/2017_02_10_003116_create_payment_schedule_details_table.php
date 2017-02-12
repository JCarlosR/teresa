<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentScheduleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_schedule_details', function (Blueprint $table) {
            $table->increments('id');

            // Header reference
            $table->integer('payment_schedule_id')->unsigned();
            $table->foreign('payment_schedule_id')->references('id')->on('payment_schedules');

            // Calculated dates
            $table->date('emission_date');
            $table->date('payment_date')->nullable();

            // Calculated amounts
            $table->float('total');
            $table->float('net');

            // Leads fields
            // Proyectos, Proveedores, Empleo, Contacto, Spam, Otros
            $table->integer('projects');
            $table->integer('suppliers');
            $table->integer('employment');
            $table->integer('contact'); // direct contact with previous clients
            $table->integer('spam');
            $table->integer('others');

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
        Schema::drop('payment_schedule_details');
    }
}
