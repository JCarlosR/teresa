<?php

use App\ProfessionalProfile;
use App\SocialProfile;
use App\User;
use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Take the first generated client
        $client = User::client()->first();
        if (! $client) return;

        // Social profiles
        SocialProfile::create([
            'user_id' => $client->id,
            'name' => 'Facebook',
            'url' => 'https://www.facebook.com/jmpoloarquitectos/',
            'followers' => 682,
            'state' => 1
        ]);
        SocialProfile::create([
            'user_id' => $client->id,
            'name' => 'Linkedin',
            'url' => 'https://www.linkedin.com/company/j.m-polo-arquitectos-proyectos-y-negocios-sac',
            'followers' => 33,
            'state' => 1
        ]);
        SocialProfile::create([
            'user_id' => $client->id,
            'name' => 'Google+',
            'url' => 'https://plus.google.com/u/0/b/113756668599454191052/102914145479591542265',
            'followers' => 11,
            'state' => 0
        ]);

        // Professional profiles
        ProfessionalProfile::create([
            'user_id' => $client->id,
            'name' => 'Architizer',
            'url' => 'http://architizer.com/firms/jm-polo-arquitectos-proyectos-y-negocios/',
            'state' => 1
        ]);
        ProfessionalProfile::create([
            'user_id' => $client->id,
            'name' => 'Archello',
            'url' => 'http://www.archello.com/en/company/jm-polo-arquitectos-proyectos-y-negocios',
            'state' => 1
        ]);
    }
}
