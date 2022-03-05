<?php

use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscription_plans')->delete();
        $subscriptionData = array(
            array(
                'id'                => 1,
                'plan_name'         => 'Free',
                'plan_price'        => '0',
                'plan_permission'   => '',
                'created_at'        => date("Y-m-d H:i:s"),
                'updated_at'        => date("Y-m-d H:i:s"),
            ),
            array(
                'id'                => 2,
                'plan_name'         => 'Basic',
                'plan_price'        => '30',
                'plan_permission'   => '',
                'created_at'        => date("Y-m-d H:i:s"),
                'updated_at'        => date("Y-m-d H:i:s"),
            ),
            array(
                'id'                =>    3,
                'plan_name'         => 'Standard',
                'plan_price'        => '35',
                'plan_permission'   =>  '',
                'created_at'        =>  date("Y-m-d H:i:s"),
                'updated_at'        =>  date("Y-m-d H:i:s"),
            ),
            array(
                'id'                =>  4,
                'plan_name'         => 'Premium',
                'plan_price'        => '45',
                'plan_permission'   =>  '',
                'created_at'        =>  date("Y-m-d H:i:s"),
                'updated_at'        =>  date("Y-m-d H:i:s"),
            ),
        );
        DB::table('subscription_plans')->insert($subscriptionData);
    }
}
