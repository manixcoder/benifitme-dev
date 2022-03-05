<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(Role::class);
        $this->call(UserRoleSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(AwardsSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(Amenities::class);
        $this->call(ServiceCategorySeeder::class);
        $this->call(SubscriptionSeeder::class);
    }
}
