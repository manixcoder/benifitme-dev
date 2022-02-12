<?php

use Illuminate\Database\Seeder;

class Amenities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amenities')->delete();
		$amenitiesData = array(
			array(
				'id' => 1,
                'amenities_name' => 'Free WiFi',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
            array(
				'id' => 2,
                'amenities_name' => 'Air Condition',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
            array(
				'id' => 3,
                'amenities_name' => 'Shower',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
            array(
				'id' => 4,
                'amenities_name' => 'Tile/marble floor',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
            array(
				'id' => 5,
                'amenities_name' => 'Balcony',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
            array(
				'id' => 6,
                'amenities_name' => 'Ironing facilities',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
            array(
				'id' => 7,
                'amenities_name' => 'Hairdryer',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
            array(
				'id' => 8,
                'amenities_name' => 'Satellite channels',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
            array(
				'id' => 9,
                'amenities_name' => 'Tumble dryer',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
            array(
				'id' => 10,
                'amenities_name' => 'Electric kettle',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
            array(
				'id' => 11,
                'amenities_name' => 'Socket near the bed',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
            array(
				'id' => 12,
                'amenities_name' => 'Additional toilet',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
            array(
				'id' => 13,
                'amenities_name' => 'Toilet',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
            array(
				'id' => 14,
                'amenities_name' => 'Desk',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
            array(
				'id' => 15,
                'amenities_name' => 'Clothes rack',
				'created_at' =>  date("Y-m-d H:i:s"),
				'updated_at' =>  date("Y-m-d H:i:s"),
			),
        );
		DB::table('amenities')->insert($amenitiesData);
    }
}
