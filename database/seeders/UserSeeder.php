<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash, Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(1)->create([
            'role' => 'admin',

            'username' => 'GoFitworkAdmin',
            'password' => Hash::make('Admin123')
        ]);

        User::factory()->count(1)->create([
            'role' => 'admin',

            'username' => 'cjane',
            'password' => Hash::make('CJane123')
        ]);
    }
}
