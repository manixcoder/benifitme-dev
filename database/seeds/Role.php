<?php

use Illuminate\Database\Seeder;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        $roleData = array(
            array(
                'id'            => 1,
                'name'          => 'admin',
                'display_name'  => 'Admin',
                'description'   =>  'This is super admin role for login',
                //'r_type'        =>    '0',
                'created_at'    =>  date("Y-m-d H:i:s"),
                'updated_at'    =>  date("Y-m-d H:i:s"),
            ),
            array(
                'id'            =>    2,
                'name'          =>    'merchant',
                'display_name'  =>    'Merchant',
                'description'   =>    'merchant',
                //'r_type'        =>    '0',
                'created_at'    =>    date("Y-m-d H:i:s"),
                'updated_at'    =>    date("Y-m-d H:i:s"),
            ),
            array(
                'id'            =>    3,
                'name'          =>    'users',
                'display_name'  =>    'users',
                'description'   =>    'users',
                //'r_type'        =>    '0',
                'created_at'    =>    date("Y-m-d H:i:s"),
                'updated_at'    =>    date("Y-m-d H:i:s"),
            ),


            // array(
            //     'id'            =>    4,
            //     'name'          =>    'Normal Business',
            //     'display_name'  =>    'Normal Business',
            //     'description'   =>    'Normal Business',
            //     'r_type'        =>    '1',
            //     'created_at'    =>    date("Y-m-d H:i:s"),
            //     'updated_at'    =>    date("Y-m-d H:i:s"),
            // ),
            // array(
            //     'id'            =>    5,
            //     'name'          =>    'Restaurant',
            //     'display_name'  =>    'Restaurant',
            //     'description'   =>    'Restaurant',
            //     'r_type'        =>    '1',
            //     'created_at'    =>    date("Y-m-d H:i:s"),
            //     'updated_at'    =>    date("Y-m-d H:i:s"),
            // ),
            // array(
            //     'id'            =>    6,
            //     'name'          =>    'Hotel',
            //     'display_name'  =>    'Hotel',
            //     'description'   =>    'Hotel',
            //     'r_type'        =>    '1',
            //     'created_at'    =>    date("Y-m-d H:i:s"),
            //     'updated_at'    =>    date("Y-m-d H:i:s"),
            // ),
            // array(
            //     'id'            =>    7,
            //     'name'          =>    'Company Owner',
            //     'display_name'  =>    'Company Owner',
            //     'description'   =>    'Company Owner',
            //     'r_type'        =>    '2',
            //     'created_at'    =>    date("Y-m-d H:i:s"),
            //     'updated_at'    =>    date("Y-m-d H:i:s"),
            // ),
            // array(
            //     'id'            =>    8,
            //     'name'          =>    'Manager',
            //     'display_name'  =>    'Manager',
            //     'description'   =>    'Manager',
            //     'r_type'        =>    '2',
            //     'created_at'    =>    date("Y-m-d H:i:s"),
            //     'updated_at'    =>    date("Y-m-d H:i:s"),
            // ),
            // array(
            //     'id'            =>    9,
            //     'name'          =>    'Accountant',
            //     'display_name'  =>    'Accountant',
            //     'description'   =>    'Accountant',
            //     'r_type'        =>    '2',
            //     'created_at'    =>    date("Y-m-d H:i:s"),
            //     'updated_at'    =>    date("Y-m-d H:i:s"),
            // ),

        );
        DB::table('roles')->insert($roleData);
    }
}
