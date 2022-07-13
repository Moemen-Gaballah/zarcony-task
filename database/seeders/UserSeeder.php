<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for($i= 0; $i <= 8; $i++){
            $data[] = [
                'name' => 'user0'.$i,
                'email' => "user0$i@gmail.com",
                'password' => Hash::make('12345678'),
            ];
        }

        DB::table('users')->insert($data);
    }
}