<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporter extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'contact',
        'cnic',
        'address',
    ];
    
    public function report()
    {
        return $this->hasOne(Report::class);
    }
    
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
    
    
}
