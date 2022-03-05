<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckInModel extends Model
{
    protected $table = 'check_in';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'merchent_id',
        'reward_value',
        'terms_conditions',
        'check_in_qr_code',
    ];
}
