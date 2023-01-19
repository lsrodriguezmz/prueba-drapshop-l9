<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      User::create([
        'name' => 'Administrador', 
        'email' => 'admin@mail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('password')
      ])->assignRole(['admin']);
      
      User::create([
        'name' => 'Manager', 
        'email' => 'manager@mail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('password')
      ])->assignRole(['manager']);
      
      User::create([
        'name' => 'User', 
        'email' => 'user@mail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('password')
      ])->assignRole(['user']);
      
      for ($i=0; $i < 17 ; $i++) {
        User::create([
          'name' => fake()->name(), 
          'email' => fake()->unique()->safeEmail(),
          'email_verified_at' => now(),
          'password' => Hash::make('password')
        ])->assignRole(['user']);
      }
    }
}
