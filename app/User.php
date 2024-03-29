<?php

namespace App;

use App\Models\Emploi;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'email',
        'password',
        'firstName',
        'lastName',
        'phone'
    ];

    public function emplois()
    {
        return $this->belongsToMany(Emploi::class);
    }

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

    public function role()
    {
      return  $this->belongsTo('App\Role');
    }

    public function hasPermission($permission)
    {
        return $this->role->permissions()->where('permission', $permission)->first() ? TRUE : FALSE;
    }

}
