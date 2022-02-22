<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adverting extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'adverting';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'banner_image', 'ad_title', 'ad_product', 'product_url'
    ];
}
