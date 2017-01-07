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
        // Clients profiles
        $this->call(ProfilesTableSeeder::class);

        // Services and projects
        $this->call(ServicesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);

        // Employees
        $this->call(EmployeesTableSeeder::class);
    }
}
