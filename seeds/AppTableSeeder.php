<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Webshaper\Api\Models\ApiApp;
class AppTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

			ApiApp::create([
                'app_name'=>'api',
                'app_token'=> $faker->uuid,
                'store_url' => 'test.com'
			]);
    }
}