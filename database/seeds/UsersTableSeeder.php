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
		DB::table('users')->delete();
		$userData = array(
			array(
				'id' => 1,
				'user_role' => 1,
				'first_name' => 'Super',
				'last_name' => 'Admin',
				'name' => 'administrator',
				'email' => 'admin@yopmail.com',
				'email_verified_at' =>  date("Y-m-d H:i:s"),
				'password' => bcrypt('Qwert@123'),
				'remember_token' => null,
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),

		);
		DB::table('users')->insert($userData);
	}
}
