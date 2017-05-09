<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameUrlColumnToIdInSocialProfiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('social_profiles', function ($table) {
            // the profile ID represents, for example, the facebook ID, twitter username, etc
            $table->renameColumn('url', 'profile_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('social_profiles', function ($table) {
            $table->renameColumn('profile_id', 'url');
        });
    }
}
