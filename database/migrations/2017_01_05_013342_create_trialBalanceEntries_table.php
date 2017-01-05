<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrialBalanceEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trialBalanceEntries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('account_id')->unsigned();
			$table->foreign('account_id')->references('id')->on('accounts');
			$table->double('amount');
			$table->string('category');
			$table->date('entry_time');
			$table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trialBalanceEntries');
	}

}
