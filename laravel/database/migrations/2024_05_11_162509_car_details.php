<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('car_details', function (Blueprint $table) {
            $table->id();
            $table->string('car_name')->nullable();
            $table->string('car_discription')->nullable();
            $table->string('body_type')->nullable();
            $table->integer('no_seats')->nullable();
            $table->string('fuel')->nullable();
            $table->string('transmission')->nullable();
            $table->string('airbags')->nullable();
            $table->string('front_parking_sensors')->nullable();
            $table->string('rear_parking_sensors')->nullable();
            $table->string('drivetrain')->nullable();
            $table->string('fuel_capacity')->nullable();
            $table->string('fuel_consumption')->nullable();
            $table->string('fuel_efficient')->nullable();
            $table->string('push_start_Button')->nullable();
            $table->string('power_windows')->nullable();
            $table->string('navigation_ready')->nullable();
            $table->string('key_less_entry')->nullable();
            $table->integer('pricing')->nullable();
            $table->string('car_images1')->nullable();
            $table->string('car_images2')->nullable();
            $table->string('car_images3')->nullable();
            $table->string('car_logo')->nullable();
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
        //
        Schema::dropIfExists('car_details');
    }
};
