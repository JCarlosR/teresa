<?php

use App\Employee;
use App\User;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
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

        Employee::create([
            'user_id' => $client->id,
            'job' => 'Administración',
            'name' => 'Alejandra Polo',
            'emails' => "apolo@jmpoloarquitectos.com\nalepolopelosi@gmail.com",
            'phones' => ''
        ]);

        Employee::create([
            'user_id' => $client->id,
            'job' => 'Arquitecto',
            'name' => '	Mónica López Alvarez',
            'emails' => 'monica.jmpoloarquitectos@gmail.com',
            'phones' => ''
        ]);
    }
}
