<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Project;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
      $this->call([
        RoleSeeder::class,
        UserSeeder::class,
        // ClientSeeder::class,
        // ProjectSeeder::class,
        // TaskSeeder::class,
      ]);
      Client::factory(10)->create();
      Project::factory(20)->create();
      Task::factory(80)->create();
    }
}
