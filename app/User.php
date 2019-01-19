<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    
    use Notifiable;
    
    protected $dates = ['date_of_birth' ];
    
    protected $guarded = [];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
    
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->sur_name}";
    }
    
    public function getAgeAttribute()
    {
        return $this->date_of_birth->diffInYears(now());
    }
    
}
