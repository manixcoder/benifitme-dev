<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hotel_roome';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'merchent_id',
        'room_type',
        'room_image',
        'room_for',
        'number_of_room',
        'min_booking_for',
        'price_per_night',
        'discount',
        'short_discription',
        'room_sq_ft',
        'single_beds',
        'hotle_address',
        'check_in',
        'check_out',
        'extra_rows',
        'health_safety',
        'selected_amenities'
    ];
}
