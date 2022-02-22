<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchentAdvertings extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'merchent_advertings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'merchent_id',
        'banner_image',
        'ad_title', 'ad_product',
        'product_url'
    ];
}
