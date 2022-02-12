<?php

use Illuminate\Database\Seeder;

class AwardsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('awards')->delete();
		$userData = array(
			array(
				'id' => 1,
				'regular_visitor' => '15 Days',
				'visitor_points' => '10 Points',
				'big_spender' =>  '700',
				'spendor_point' => '15 Points',
				'sharing_app_points' => '15 Points',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),

		);
		DB::table('awards')->insert($userData);
	}
}
