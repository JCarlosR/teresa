<?php

use App\ClientType;
use Illuminate\Database\Seeder;

class ClientTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClientType::create([
            'name' => 'SEO Arquitectos',
            'description' => 'Servicio de presencia online para estudios de arquitectura.'
        ]);
    }
}
