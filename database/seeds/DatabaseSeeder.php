<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Users by rol
        $this->call(UsersTableSeeder::class);
        $this->call(ClientsTableSeeder::class);

        // Clients data
        $this->call(ServerAccessesTableSeeder::class);

        // Services and projects
        $this->call(ServicesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
    }
}
