<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_room', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('merchent_id');
            $table->string('room_type')->nullable();
            $table->string('room_image')->nullable();
            $table->string('room_for')->nullable();
            $table->string('number_of_room')->nullable();
            $table->string('min_booking_for')->nullable();
            $table->string('price_per_night')->nullable();
            $table->string('discount')->nullable();
            $table->longText('short_discription')->nullable();
            $table->string('room_sq_ft')->nullable();
            $table->string('single_beds')->nullable();
            $table->string('hotle_address')->nullable();
            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->longText('extra_rows')->nullable();
            $table->longText('health_safety')->nullable();
            $table->longText('selected_amenities')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_room');
    }
}
