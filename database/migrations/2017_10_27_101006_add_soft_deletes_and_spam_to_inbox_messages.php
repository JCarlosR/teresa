<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoftDeletesAndSpamToInboxMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inbox_messages', function($table) {
            $table->boolean('spam')->default(false);
            $table->boolean('read')->default(false);
            $table->boolean('important')->default(false);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inbox_messages', function($table) {
            $table->dropColumn([
                'spam', 'read', 'important'
            ]);
            $table->dropSoftDeletes();
        });
    }
}
