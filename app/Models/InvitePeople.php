<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvitePeople extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'invite_people';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'merchent_id', 'invite_qr_code'
    ];
}
