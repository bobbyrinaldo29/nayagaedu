<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            [
                'name' => 'Nayaga Edu',
                'email' => 'admin@nayagaedu.com',
                'subject' => 'Test Message',
                'message' => 'Hello World, this is test message',
                'read' => 0,
            ],
        ]);
    }
}
