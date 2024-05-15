<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserOrdersModel extends Model
{
    protected $table = 'users_orders';

    protected $fillable = [
        'user_id',
        'car_id',
        'start_date',
        'end_date',
        'Total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function car()
    {
        return $this->belongsTo(CarDetailsModel::class, 'car_id');
    }
}
