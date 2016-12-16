<?php

use App\ServerAccess;
use App\User;
use Illuminate\Database\Seeder;

class ServerAccessesTableSeeder extends Seeder
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

        ServerAccess::create([
            'user_id' => $client->id,
            'name' => 'Panel de control',
            'url' => 'http://jmpoloarquitectos.com:2082',
            'credentials' => "Usuario: jmpoloar\nContraseña: 701R5sFkhy"
        ]);
        ServerAccess::create([
            'user_id' => $client->id,
            'name' => 'FTP',
            'url' => 'www.jmpoloarquitectos.com',
            'credentials' => "Usuario: jmpoloar\nContraseña: 701R5sFkhy"
        ]);
    }
}
