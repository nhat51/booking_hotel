<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function hotelComment(){
        return $this->hasMany(HotelComments::class,'user_id', 'id');
    }
    public function blog_comment(){
        return $this->hasMany(BlogComments::class, 'user_id', 'id');
    }
    public function traveler(){
        return $this->hasOne(Travelers::class, 'user_id', 'id');
    }
    public function userInformation(){
        return $this->belongsTo(UserInformation::class,'user_id', 'id');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }

    public function hasAnyRoles($roles){

        if ($this->roles()->whereIn('name', $roles)->first()){
            return true;
        }

        return false;
    }

    public function hasRole($role){

        if ($this->roles()->where('name', $role)->first()){
            return true;
        }

        return false;
    }
}
