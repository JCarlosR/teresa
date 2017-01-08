<?php

use App\User;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clients (rol 0)
        User::create([
            'name' => 'JMPolo Arquitectos',
            'email' => 'webjmpoloarquitectos@gmail.com',
            'password' => bcrypt('123123'),
            'client_type_id' => 1,
            'trade_name' => 'J.M Polo Arquitectos, Proyectos y Negocios',
            'fiscal_name' => 'J.M Polo Arquitectos, Proyectos y Negocios SAC',
            'ruc' => '20502880056',
            'phones' => '00511 4370235',
            'domain' => 'www.verticearquitectos.com'
        ]);
        User::create([
            'name' => 'Vértice Arquitectos',
            'email' => 'verticearquitectosperu@gmail.com',
            'password' => bcrypt('123123'),
            'client_type_id' => 1,
        ]);
        User::create([
            'name' => 'Lindley Arquitectos',
            'email' => 'catherine@lindleyarq.com',
            'password' => bcrypt('123123'),
            'client_type_id' => 1,
        ]);
        User::create([
            'name' => 'Alfredo Queirolo',
            'email' => 'alfredoqueirolo@gmail.com',
            'password' => bcrypt('123123'),
            'client_type_id' => 1,
        ]);
        User::create([
            'name' => 'Diaz Marchani',
            'email' => 'web@diazmarchani.com',
            'password' => bcrypt('123123')
        ]);
    }
}
