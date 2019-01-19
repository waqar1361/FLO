<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $guarded = [];
    
    public function scopeNotAnswered($query)
    {
        return $query->where('answered', false);
    }
}
