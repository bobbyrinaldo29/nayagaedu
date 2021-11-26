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
                'packageName' => 'Starter',
                'price' => '500000',
                'description' => 'Starter Nagita Featured, Affiliate Program, License 1 Year',
            ],
            [
                'packageName' => 'Beginner',
                'price' => '2000000',
                'description' => 'Beginner Nagita Featured, Affiliate Program, License 1 Year',
            ],
            [
                'packageName' => 'Intermediate',
                'price' => '3000000',
                'description' => 'Intermediate Nagita Featured, Affiliate Program, License 1 Year',
            ],
            [
                'packageName' => 'Expert',
                'price' => '5000000',
                'description' => 'Expert Nagita Featured, Affiliate Program, License 1 Year',
            ],
        ]);
    }
}
