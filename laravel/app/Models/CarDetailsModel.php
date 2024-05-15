<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarDetailsModel extends Model
{
    protected $table = 'car_details';

    protected $fillable = [
        'car_name',
        'car_images1',
        'car_images2',
        'car_images3',
        'car_logo',
        'car_description',
        'body_type',
        'no_seats',
        'fuel',
        'transmission',
        'airbags',
        'front_parking_sensors',
        'rear_parking_sensors',
        'drivetrain',
        'fuel_capacity',
        'fuel_consumption',
        'fuel_efficient',
        'push_start_Button',
        'power_windows',
        'navigation_ready',
        'key_less_entry',
        'pricing',
    ];
}
