<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Webshaper\Api\Models\ApiStoreDb;
class StoreDbTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        ApiStoreDb::create([
            'store_url' => 'test.com',
            'db_name' => 'db1',
            'db_username' => $faker->userName,
            'db_password' => '1232'
        ]);
	}

}