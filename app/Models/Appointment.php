<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'appointments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'merchent_id',
        'appointment_title',
        'appointment_start',
        'appointment_end',        
        'appointment_time_start',
        'appointment_time_end',
        'appointment_product_services'
    ];
}
