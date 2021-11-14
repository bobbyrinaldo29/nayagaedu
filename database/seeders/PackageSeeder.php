<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            [
                'packageName' => 'Basic',
                'price' => '3000',
                'description' => 'Free Nagita App, Trade Community, 50:50',
            ],
            [
                'packageName' => 'Beginner',
                'price' => '5000',
                'description' => 'Free Nagita App, Trade Community, Basic Trade Education, Free Copy Trade, Manage Account, 70:30',
            ],
            [
                'packageName' => 'Intermediate',
                'price' => '15000',
                'description' => 'Free Nagita App, Trade Community, Basic To Intermediate, Free Trade Education, Free Copy Trade Manage Account, 80:20',
            ],
            [
                'packageName' => 'Expert',
                'price' => '20000',
                'description' => 'Free Nagita App, Trade Community, Basic To Intermediate, Free Trade Education Copy, Free Copy Trade Manage Account, 90:10',
            ],
        ]);
    }
}
