<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_name');
            $table->bigInteger('parent_id')->default('0')->nullable();
            $table->enum('status', ['1', '0'])->comment('1 = Active; 0 = Deactive');           
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
        Schema::dropIfExists('services_category');
    }
}
