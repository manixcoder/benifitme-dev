<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'food_dises';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'merchent_id',
        'disk_category_id',
        'dise_name',
        'dise_description',
        'disk_price',
        'disk_discount',
        'disk_valid',
        'disk_image',
        'is_available',
    ];
}
