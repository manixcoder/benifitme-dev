<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesCategory extends Model
{

    protected $table = 'services_category';
    protected $fillable = ['category_name', 'parent_id', 'status'];
}
