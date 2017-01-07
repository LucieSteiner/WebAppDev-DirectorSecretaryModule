<?php

use Illuminate\Database\Seeder;

class TrialBalanceEntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trialBalanceEntries')->insert([
            'account_id' => 1,
            'amount' => 2000,
            'category' => 'Credit',
            'entry_time' => '20160407',
        ]);
        DB::table('trialBalanceEntries')->insert([
            'account_id' => 1,
            'amount' => 1000,
            'category' => 'Debit',
            'entry_time' => '20160407',
        ]);
        DB::table('trialBalanceEntries')->insert([
            'account_id' => 1,
            'amount' => 3000,
            'category' => 'Credit',
            'entry_time' => '20160407',
        ]);
        DB::table('trialBalanceEntries')->insert([
            'account_id' => 2,
            'amount' => 2000,
            'category' => 'Credit',
            'entry_time' => '20160407',
        ]);
        DB::table('trialBalanceEntries')->insert([
            'account_id' => 2,
            'amount' => 3000,
            'category' => 'Credit',
            'entry_time' => '20160407',
        ]);
        DB::table('trialBalanceEntries')->insert([
            'account_id' => 2,
            'amount' => 3000,
            'category' => 'Debit',
            'entry_time' => '20160407',
        ]);
        DB::table('trialBalanceEntries')->insert([
            'account_id' => 3,
            'amount' => 1000,
            'category' => 'Credit',
            'entry_time' => '20160407',
        ]);
        DB::table('trialBalanceEntries')->insert([
            'account_id' => 3,
            'amount' => 2000,
            'category' => 'Debit',
            'entry_time' => '20160407',
        ]);
        DB::table('trialBalanceEntries')->insert([
            'account_id' => 4,
            'amount' => 1000,
            'category' => 'Credit',
            'entry_time' => '20160407',
        ]);
    }
}
