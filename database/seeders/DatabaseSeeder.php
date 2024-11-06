<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'hev',
            'last_name' => 'hev',
            'phone_number' => '09201199728',
            'email' => 'hev.abi@gmail.com',
            'password' => '123',
        ]);
    }
}
