<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('merchent_id');
            $table->date('appointment_start')->nullable();
            $table->date('appointment_end')->nullable();
            $table->string('appointment_title')->nullable();
            $table->time('appointment_time_start')->nullable();
            $table->time('appointment_time_end')->nullable();
            $table->string('appointment_product_services')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
