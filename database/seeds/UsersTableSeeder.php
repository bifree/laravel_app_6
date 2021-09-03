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
        DB::table('users')->insert([
            'name' => 'sample1',
            'email' => 'sample1@sample.com',
            'address' => '1',
            'password' => bcrypt('123456'),
            'profile' => 'こんにちは'
            ]);
        DB::table('users')->insert([
            'name' => 'sample2',
            'email' => 'sample2@sample.com',
            'address' => '7',
            'password' => bcrypt('123456'),
            'profile' => 'Hi! from Osaka.'
            ]);
        DB::table('users')->insert([
            'name' => 'sample3',
            'email' => 'sample3@sample.com',
            'address' => '21',
            'password' => bcrypt('123456'),
            'profile' => 'Hello from New York.'
            ]);
    }
}
