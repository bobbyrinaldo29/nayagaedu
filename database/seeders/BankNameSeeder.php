<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BankNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'referral' => 'ngU1KVuK',
                'name' => 'Bobby',
                'email' => 'bobby.rinaldo12@gmail.com',
                'role' => 2,
                'email_verified_at' => '2021-08-09 14:20:42',
                'password' => Hash::make('12345678'),
                'gender' => 'Male',
                'phone' => '085320022693',
                'idCard' => '3273042912960003',
                'address' => 'Jl. Terusan Pasirkoja',
                'postalCOde' => '40232',
                'fullName' => 'BOBBY RINALDO SUKMA DEWA',
                'bankName' => 'BCA Virtual Account',
                'accountNumber' => '01234567890',
                'balance' => '0',
            ],
        ]);

        DB::table('bank_names')->insert([
            [
                'name' => 'Maybank Virtual Account',
                'code' => 'MYBVA',
                'status' => '0',
            ],
            [
                'name' => 'Permata Virtual Account',
                'code' => 'PERMATAVA',
                'status' => '1',
            ],
            [
                'name' => 'BNI Virtual Account',
                'code' => 'BNIVA',
                'status' => '0',
            ],
            [
                'name' => 'BRI Virtual Account',
                'code' => 'BRIVA',
                'status' => '1',
            ],
            [
                'name' => 'Mandiri Virtual Account',
                'code' => 'MANDIRIVA',
                'status' => '0',
            ],
            [
                'name' => 'BCA Virtual Account',
                'code' => 'BCAVA',
                'status' => '1',
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
