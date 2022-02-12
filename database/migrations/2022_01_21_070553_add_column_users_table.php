<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('user_role')->after('id')->nullable();
            $table->string('first_name')->after('user_role')->nullable();
            $table->string('last_name')->after('first_name')->nullable();
            $table->string('company_name')->after('password')->nullable();
            $table->string('profile_image')->after('company_name')->nullable();
            $table->string('company_logo')->after('profile_image')->nullable();
            $table->string('company_banner')->after('company_logo')->nullable();
            $table->string('company_type')->after('company_banner')->nullable();
            $table->string('sub_restaurant_type')->after('company_type')->nullable();
            $table->string('address')->after('sub_restaurant_type')->nullable();
            $table->string('city')->after('address')->nullable();
            $table->string('zip_code')->after('city')->nullable();
            $table->string('uid_number')->after('zip_code')->nullable();
            $table->string('general_layality')->after('uid_number')->nullable();
            $table->string('user_type')->after('general_layality')->nullable();
            $table->string('date_birthday')->after('user_type')->nullable();
            $table->enum('gender', ['1', '2', '0'])->after('date_birthday')->default(1)->comment = '1=Male, 2 = Female 0=Special ';
            $table->string('mobile')->after('gender')->nullable();
            $table->string('otp')->after('mobile')->nullable();
            $table->string('subscription_id')->after('otp')->nullable();
            $table->dateTime('last_login')->after('subscription_id')->nullable();
            $table->longText('about_description')->after('last_login')->nullable();
            $table->string('opening_time')->after('about_description')->nullable();
            $table->string('closing_time')->after('opening_time')->nullable();
            $table->string('website_link')->after('closing_time')->nullable();
            $table->string('facebook_link')->after('website_link')->nullable();
            $table->string('instagram_link')->after('facebook_link')->nullable();
            $table->string('twitter_link')->after('instagram_link')->nullable();
            $table->longText('comp_short_descriptin')->after('twitter_link')->nullable();
            $table->enum('is_confirmation_chk',['1','0'])->after('comp_short_descriptin')->default(1)->comment = "1 =Yes ,0 No";
            $table->enum('is_active', ['1', '2', '0'])->after('is_confirmation_chk')->default(1)->comment = '1=Active, 2 = decline 0=Inactive ';
            $table->enum('is_audience', ['1', '0'])->after('is_active')->default(1)->comment = "1 =Yes ,0 No";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('user_role')->nullable();
            $table->dropColumn('first_name')->nullable();
            $table->dropColumn('last_name')->nullable();
            $table->dropColumn('company_name')->nullable();
            $table->dropColumn('profile_image')->nullable();
            $table->dropColumn('company_logo')->nullable();
            $table->dropColumn('company_banner')->nullable();
            $table->dropColumn('company_type')->nullable();
            $table->dropColumn('sub_restaurant_type')->nullable();
            $table->dropColumn('address')->nullable();
            $table->dropColumn('city')->nullable();
            $table->dropColumn('zip_code')->nullable();
            $table->dropColumn('uid_number')->nullable();
            $table->dropColumn('general_layality')->nullable();
            $table->dropColumn('user_type')->nullable();
            $table->dropColumn('date_birthday')->nullable();
            $table->dropColumn('gender')->nullable();
            $table->dropColumn('mobile')->nullable();
            $table->dropColumn('otp')->nullable();
            $table->dropColumn('subscription_id')->nullable();
            $table->dropColumn('last_login')->nullable();
            $table->dropColumn('about_description')->nullable();
            $table->dropColumn('opening_time')->nullable();
            $table->dropColumn('closing_time')->nullable();
            $table->dropColumn('website_link')->nullable();
            $table->dropColumn('facebook_link')->nullable();
            $table->dropColumn('instagram_link')->nullable();
            $table->dropColumn('twitter_link')->nullable();
            $table->dropColumn('comp_short_descriptin')->nullable();
            $table->dropColumn('is_active')->nullable();
            $table->dropColumn('is_audience')->nullable();
            $table->dropColumn('is_confirmation_chk')->nullable();
        });
    }
}
