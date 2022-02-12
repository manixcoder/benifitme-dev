<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'merchent_id',
        'product_name',
        'pro_category',
        'pro_price',
        'pro_discount',
        'pro_valid_till',
        'pro_description',
        'pro_image',
        'product_type'
    ];
}
