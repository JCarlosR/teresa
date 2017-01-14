<?php

use App\Project;
use App\User;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Take the first generated client
        $client = User::where('role', 0)->first();
        if (! $client) return;

        Project::create([
            'name' => 'Tienda Samsonite Larcomar',
            'client' => 'SAMSONITE PERU S.A.C.',
            'year' => '2015',
            'user_id' => $client->id
        ]);
        Project::create([
            'name' => 'Tienda Samsonite INOUTLET Faucett',
            'client' => 'SAMSONITE PERU S.A.C.',
            'year' => '2015',
            'user_id' => $client->id
        ]);
        Project::create([
            'name' => 'Tienda Colloky Jockey Plaza ETAPA 2',
            'client' => 'SAMSONITE PERU S.A.C.',
            'year' => '2015',
            'user_id' => $client->id
        ]);
    }
}
