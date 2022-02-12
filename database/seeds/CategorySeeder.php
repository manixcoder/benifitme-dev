<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $roleData = array(
            array(
                'id'            => 1,
                'name'          => 'Normal Business',
                'parent_id'     => '0',
                'status'        => '1',
                'c_type'        => '1',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 2,
                'name'          => 'Restaurant',
                'parent_id'     => '0',
                'status'        => '1',
                'c_type'        => '1',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 3,
                'name'          => 'Hotel',
                'parent_id'     => '0',
                'status'        => '1',
                'c_type'        => '1',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 4,
                'name'          => 'Company Owner',
                'parent_id'     => '0',
                'status'        => '1',
                'c_type'        => '2',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 5,
                'name'          => 'Manager',
                'parent_id'     => '0',
                'status'        => '1',
                'c_type'        => '2',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 6,
                'name'          => 'Accountant',
                'parent_id'     => '0',
                'status'        => '1',
                'c_type'        => '2',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
        );
        DB::table('categories')->insert($roleData);
    }
}
