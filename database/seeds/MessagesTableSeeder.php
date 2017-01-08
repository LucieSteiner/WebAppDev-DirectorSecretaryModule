<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'from' => 1,
            'to' => 2,
            'subject' => str_random(10),
            'body' => 'Lorem ipsum dolor sit amet'
        ]);
        DB::table('messages')->insert([
            'from' => 4,
            'to' => 2,
            'subject' => str_random(10),
            'body' => 'Lorem ipsum dolor sit amet'
        ]);
        DB::table('messages')->insert([
            'from' => 5,
            'to' => 2,
            'subject' => str_random(10),
            'body' => 'Lorem ipsum dolor sit amet'
        ]);
        DB::table('messages')->insert([
            'from' => 6,
            'to' => 2,
            'subject' => str_random(10),
            'body' => 'Lorem ipsum dolor sit amet'
        ]);
        DB::table('messages')->insert([
            'from' => 4,
            'to' => 5,
            'subject' => str_random(10),
            'body' => 'Lorem ipsum dolor sit amet'
        ]);

    }
}
