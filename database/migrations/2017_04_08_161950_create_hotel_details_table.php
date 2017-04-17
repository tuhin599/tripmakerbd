<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('hotel_id');
            $table->string('room_type');
            $table->string('price');
            $table->string('status');
            $table->text('guideline');
            $table->string('room_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('room_details');
    }
}
