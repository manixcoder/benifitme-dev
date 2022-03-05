<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertings extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'advertings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ad_name', 'ad_image', 'link'
    ];
}
