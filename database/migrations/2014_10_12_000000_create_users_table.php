<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('photo'); // profile photo extension

            // Client: 0 | Admin: 1
            $table->smallInteger('role')->default(0);

            // Client type
            $table->integer('client_type_id')->unsigned()->nullable();
            $table->foreign('client_type_id')->references('id')->on('client_types');

            // Company main data
            $table->string('trade_name');
            $table->string('fiscal_name');
            $table->string('ruc');
            $table->string('address');
            $table->string('phones');
            $table->time('schedule_start');
            $table->time('schedule_end');
            $table->date('works_from');

            // Company data (editable as admin)
            $table->string('domain');
            $table->string('google_analytics');
            $table->string('webmaster_tools_google');
            $table->string('webmaster_tools_bing');

            $table->rememberToken();
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
        Schema::drop('users');
    }
}
