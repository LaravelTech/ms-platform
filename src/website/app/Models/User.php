<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, HasRoles;
    use SoftDeletes;
    
    protected $guard_name   = 'web';

    const MANAGE_ROLE_ID = 1;
    const ADMIN_ROLE_ID = 2;
    const EMPLOYEE_ROLE_ID = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'name',
        'email',
        'password',
        'birthday',
        'gender',
        'status',
        'avatar',
        'zip',
        'phone',
        'address',
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

    /**
     * Get the user's full name.
     *
     * @return string
    */
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    /**
     * Get the user's gender string.
     *
     * @return string
    */
    public function getGenderStrAttribute()
    {
        switch ($this->gender) {
            case 0:
                return "Female";
                break;
            case 1:
                return "Male";
                break;
            case 2:
                return "Other";
                break;
        }
    }

    /**
     * Get the user's gender check.
     *
     * @return string
    */
    public function getGenderCheck($value)
    {
        if ($this->gender == $value) {
            return true;
        }
        return false;
    }

    /**
     * Get the user's status string.
     *
     * @return string
    */
    public function getStatusStrAttribute()
    {
        switch ($this->status) {
            case 0:
                return "In-Active";
                break;
            case 1:
                return "Active";
                break;
        }
    }
}
