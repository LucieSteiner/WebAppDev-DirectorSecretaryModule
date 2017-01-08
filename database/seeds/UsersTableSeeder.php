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
            'name' => 'Sarah',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'Clerk'
        ]);
        DB::table('users')->insert([
            'name' => 'John',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'Director'
        ]);
        DB::table('users')->insert([
            'name' => 'Harry',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'Secretary'
        ]);
        DB::table('users')->insert([
            'name' => 'James',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'Clerk'
        ]);
        DB::table('users')->insert([
            'name' => 'Mary',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'Auditor'
        ]);
        DB::table('users')->insert([
            'name' => 'Janet',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'Accountant'
        ]);
    }
}
