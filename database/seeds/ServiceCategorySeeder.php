<?php

use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_category')->delete();
        $subscriptionData = array(
            array(
                'id'                => 1,
                'category_name'     => "Personal Care Appliances",
                'parent_id'         => '0',
                'status'            => '1',
                'created_at'        =>  date("Y-m-d H:i:s"),
                'updated_at'        =>  date("Y-m-d H:i:s"),
            ),
            array(
                'id'                => 2,
                'category_name'     => "Home appliances",
                'parent_id'         => '0',
                'status'            => '1',
                'created_at'        =>  date("Y-m-d H:i:s"),
                'updated_at'        =>  date("Y-m-d H:i:s"),
            ),
            array(
                'id'                => 3,
                'category_name'     => "Men's Shoes & T-Shirt",
                'parent_id'         => '0',
                'status'            => '1',
                'created_at'        =>  date("Y-m-d H:i:s"),
                'updated_at'        =>  date("Y-m-d H:i:s"),
            ),
            array(
                'id'                => 4,
                'category_name'     => "Fresh vegetables & fruits",
                'parent_id'         => '0',
                'status'            => '1',
                'created_at'        =>  date("Y-m-d H:i:s"),
                'updated_at'        =>  date("Y-m-d H:i:s"),
            ),



        );
        DB::table('services_category')->insert($subscriptionData);
        
    }
}
