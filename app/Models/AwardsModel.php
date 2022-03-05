<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AwardsModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'awards';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'regular_visitor',
        'visitor_points',
        'big_spender',
        'spendor_point',
        'sharing_app_points'
    ];
}
