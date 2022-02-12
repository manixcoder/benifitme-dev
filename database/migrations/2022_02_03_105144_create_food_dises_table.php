<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodDisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_dises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('merchent_id');
            $table->string('disk_category_id')->nullable();
            $table->string('dise_name')->nullable();
            $table->longText('dise_description')->nullable();            
            $table->string('disk_price')->nullable();
            $table->string('disk_discount')->nullable();
            $table->date('disk_valid')->nullable();
            $table->date('disk_image')->nullable();
            $table->enum('is_available', ['1', '2'])->default(1)->comment = '1=available, 2 = not available';
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
        Schema::dropIfExists('food_dises');
    }
}
