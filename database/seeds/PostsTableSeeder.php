<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => '2',
            'title' => 'I like ramen',
            'body' => 'why not?'
            ]);
        DB::table('posts')->insert([
            'user_id' => '1',
            'title' => 'I like sushi',
            'body' => 'why not?'
            ]);
        DB::table('posts')->insert([
            'user_id' => '3',
            'title' => 'I like meet',
            'body' => 'why not?'
            ]);
    }
}
