<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddDbHostToStoreDbTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('store_db', function(Blueprint $table)
		{
            $table->string('db_host')->after('store_url');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('store_db', function(Blueprint $table)
		{
			$table->dropColumn('db_host');
		});
	}

}
