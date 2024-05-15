<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarProsConsModel extends Model
{
    protected $table = 'car_pros_cons';

    protected $fillable = [
        'car_id',
        'pros',
        'cons',
    ];

    public function car()
    {
        return $this->belongsTo(CarDetailsModel::class, 'car_id');
    }
}
