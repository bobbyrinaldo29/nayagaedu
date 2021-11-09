<?php

namespace Database\Seeders;

use App\Models\BankName;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bank_names')->insert([
            [
                'name' => 'Maybank Virtual Account',
                'code' => 'MYBVA',
                'status' => '0',
            ],
            [
                'name' => 'Permata Virtual Account',
                'code' => 'PERMATAVA',
                'status' => '0',
            ],
            [
                'name' => 'BNI Virtual Account',
                'code' => 'BNIVA',
                'status' => '0',
            ],
            [
                'name' => 'BRI Virtual Account',
                'code' => 'BRIVA',
                'status' => '0',
            ],
            [
                'name' => 'Mandiri Virtual Account',
                'code' => 'MANDIRIVA',
                'status' => '0',
            ],
            [
                'name' => 'BCA Virtual Account',
                'code' => 'BCAVA',
                'status' => '0',
            ],
            [
                'name' => 'Sinarmas Virtual Account',
                'code' => 'SMSVA',
                'status' => '0',
            ],
            [
                'name' => 'Muamalat Virtual Account',
                'code' => 'MUAMALATVA',
                'status' => '0',
            ],
        ]);
    }
}
