<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // Admin
            [
                'full_name' => 'kngell Admin',
                'username' => 'admin',
                'email' => 'admin@kngell.com',
                'password' => Hash::make('aaaaa'),
                'role' => 'admin',
                'status' => 'active'
            ],
            //Vendor
            [
                'full_name' => 'kngell Vendor',
                'username' => 'vendor',
                'email' => 'vendor@kngell.com',
                'password' => Hash::make('aaaaa'),
                'role' => 'vendor',
                'status' => 'active'
            ],
            //Customer
            [
                'full_name' => 'kngell Customer',
                'username' => 'customer',
                'email' => 'customer@kngell.com',
                'password' => Hash::make('aaaaa'),
                'role' => 'customer',
                'status' => 'active'
            ],
        ]);
    }
}
