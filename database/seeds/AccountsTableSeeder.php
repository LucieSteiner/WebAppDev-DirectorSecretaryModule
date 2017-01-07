<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('accounts')->insert([
            'name' => str_random(10),
            'finished' => false,
            'audited' => false,
        ]);
        DB::table('accounts')->insert([
            'name' => str_random(10),
            'finished' => false,
            'audited' => false,
        ]);
        DB::table('accounts')->insert([
            'name' => str_random(10),
            'finished' => true,
            'audited' => false,
        ]);
        DB::table('accounts')->insert([
            'name' => str_random(10),
            'finished' => true,
            'audited' => true,
        ]);

    }
}
