<?php

use Illuminate\Database\Seeder;


class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->delete();
        $userRole = array(
            array(
                'user_id'  =>  1,
                'role_id'  =>  1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ),
        );
        DB::table('role_user')->insert($userRole);
    }
}
