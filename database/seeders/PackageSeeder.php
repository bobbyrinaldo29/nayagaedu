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
                'price' => '50',
                'description' => 'Copy Trade, Profit Share 60:40, Depo $500-$900, Target Profit 20-30%, Trader Talent',
            ],
            [
                'packageName' => 'Beginner',
                'price' => '200',
                'description' => 'Copy Trade, Profit Share 70:30, Depo $1000-$2500, Target Profit 10-30%, Trader Talent, Expert Advisor, Depo $3000-$5000, Profit Share 70:30, Profit 10-20%',
            ],
            [
                'packageName' => 'Intermediate',
                'price' => '300',
                'description' => 'Copy Trade, Profit Share 80:20, Depo $3000-$4500, Target Profit 10-30%, Trader Talent, Expert Advisor, Depo $6000-$9000, Profit Share 80:20, Profit 10-20%',
            ],
            [
                'packageName' => 'Expert',
                'price' => '500',
                'description' => 'Copy Trade, Profit Share 90:10, Minimum Depo $5000, Target Profit 10-30%, Trader Talent, Expert Advisor, Depo $10.000-UP, Profit Share 90:10, Profit 10-20%',
            ],
        ]);
    }
}
