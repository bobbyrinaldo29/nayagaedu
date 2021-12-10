<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_articles')->insert([
            [
                'name' => 'Forex',
            ],
            [
                'name' => 'Cryptocurrency',
            ],
            [
                'name' => 'Stock',
            ],
        ]);
    }
}
