<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Models\UserRoleRelation;
use Auth;
use App\Models\Role;

class User extends Authenticatable implements MustVerifyEmail
{
    use  Notifiable, EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'id',
        'user_role',
        'first_name',
        'last_name',
        'name',
        'email',
        'email_verified_at',
        'password',
        'company_name',
        'profile_image',
        'company_logo',
        'company_banner',
        'company_type',
        'sub_restaurant_type',
        'address',
        'city',
        'zip_code',
        'uid_number',
        'general_layality',
        'user_type',
        'date_birthday',
        'gender',
        'mobile',
        'otp',
        'subscription_id',
        'last_login',
        'about_description',
        'opening_time',
        'closing_time',
        'website_link',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'is_active',
        'remember_token',
        'created_at',
        'updated_at'

    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getRole()
    {
        return $this->hasOneThrough('App\Models\Role', 'App\Models\UserRoleRelation', 'user_id', 'id', 'id', 'role_id');
    }
    public function checkFollow()
    {
        return $this->belongsToMany('App\User', 'following', 'masjid_id', 'user_id');
    }
    /**
     * Check Roles admin here 
     *
     * @var array
     */
    public function isAdmin()
    {
        $role = Role::join('role_user', 'roles.id', '=', 'role_user.role_id')
            ->where('user_id', Auth::user()->id)
            ->first();
        return $role->name == 'admin' ? true : false;
    }
    public function isMerchant()
    {
        $role = Role::join('role_user', 'roles.id', '=', 'role_user.role_id')
            ->where('user_id', Auth::user()->id)
            ->first();
        return $role->name == 'merchant' ? true : false;
    }
    public function isUsers()
    {
        $role = Role::join('role_user', 'roles.id', '=', 'role_user.role_id')
            ->where('user_id', Auth::user()->id)
            ->first();
        return $role->name == 'users' ? true : false;
    }
}
