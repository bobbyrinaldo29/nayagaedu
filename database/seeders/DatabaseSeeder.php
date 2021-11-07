<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        User::create([
            'referral' => 0,
            'name' => 'Admin',
            'email' => 'admin@nayagaedu.com',
            'role' => 1,
            'password' => Hash::make('12345678'),
        ]);
    }
}
