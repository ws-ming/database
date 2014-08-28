<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPrivateKeyToAppTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('app', function(Blueprint $table)
		{
			$table->string('private_key')->after('app_token');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('app', function(Blueprint $table)
		{
		    $table->dropColumn('private_key');
		});
	}

}
