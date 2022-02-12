<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->delete();
        $roleData = array(
            array(
                'id'            => 1,
                'name'          => 'Dashboard',
                'display_name'  => 'Dashboard',
                'description'   => 'Dashboard permission',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 2,
                'name'          => 'Products & Services',
                'display_name'  => 'Products & Services',
                'description'   => 'Products & Services permission',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 3,
                'name'          => 'Loyalty Points',
                'display_name'  => 'Loyalty Points',
                'description'   => 'Loyalty Points permission',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 4,
                'name'          => 'My QR Code',
                'display_name'  => 'My QR Code',
                'description'   => 'My QR Code permission',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 5,
                'name'          => 'Messages',
                'display_name'  => 'Messages',
                'description'   => 'Messages permission',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 6,
                'name'          => 'Appointments',
                'display_name'  => 'Appointments',
                'description'   => 'Appointments permission',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 7,
                'name'          => 'Tables',
                'display_name'     => 'Tables',
                'description'        => 'Tables permission',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 8,
                'name'          => 'Rooms',
                'display_name'  => 'Rooms',
                'description'   => 'Rooms permission',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 9,
                'name'          => 'Menu',
                'display_name'     => 'Menu',
                'description'        => 'Menu permission',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 10,
                'name'          => 'Check In',
                'display_name'  => 'Check In',
                'description'   => 'Check In permission',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 11,
                'name'          => 'Advertising',
                'display_name'  => 'Advertising',
                'description'   => 'Advertising permission',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),
            array(
                'id'            => 12,
                'name'          => 'Awards',
                'display_name'  => 'Awards',
                'description'   => 'Awards permission',
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ),

        );
        DB::table('permissions')->insert($roleData);
    }
}
