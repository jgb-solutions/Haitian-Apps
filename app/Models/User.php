<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
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
        'name',
        'email',
        'password',
        'avatar',
        'facebook_id',
        'google_id',
        'google_link',
        'facebook_link'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFirstNameAttribute()
    {
         return trim(explode(' ', $this->name)[0]);
    }

    public function has_any_links()
    {
        return $this->facebook || $this->twitter ||
            $this->github || $this->linkedin ||
            $this->instagram || $this->youtube ||
            $this->email;
    }

    public function getEmailUrlAttribute()
    {
        return "mailto:{$this->email}";
    }
}
