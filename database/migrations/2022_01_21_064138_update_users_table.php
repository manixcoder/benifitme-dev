<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
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
            $table->string('first_name')->after('name')->nullable();
            $table->string('last_name')->after('first_name')->nullable();
            $table->string('company_name')->after('password')->nullable();
            $table->string('company_type')->after('company_name')->nullable();
            $table->string('restaurant_type')->after('company_type')->nullable();
            $table->string('address')->after('restaurant_type')->nullable();
            $table->string('city')->after('address')->nullable();
            $table->string('zip_code')->after('city')->nullable();
            $table->string('uid_number')->after('zip_code')->nullable();
            $table->string('general_layality')->after('uid_number')->nullable();
            $table->string('user_type')->after('general_layality')->nullable();
            $table->string('date_birthday')->after('user_type')->nullable();
            $table->string('gender')->after('date_birthday')->nullable();
            $table->string('mobile')->after('gender')->nullable();
            $table->string('otp')->after('mobile')->nullable();
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
            $table->dropColumn('firstName')->nullable();
            $table->dropColumn('lastName')->nullable();
            $table->dropColumn('company_name')->nullable();
            $table->dropColumn('company_type')->nullable();
            $table->dropColumn('restaurant_type')->nullable();
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
        });
    }
}
