<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'email' => 'mailinh13a@gmail.com',
                'password' => bcrypt('123456789'),
            ],

        ];
        \Illuminate\Support\Facades\DB::table('loyal_customers')->insert($data);
    }
}
