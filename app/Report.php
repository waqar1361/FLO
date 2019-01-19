<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model {
    
    protected $guarded = [];
    
    public function reporter()
    {
        return $this->belongsTo(Reporter::class);
    }
    
    public function getFullNameAttribute()
    {
        if ($this->first_name == null)
            return "Unknown";
        
        return "$this->first_name $this->last_name";
    }
    
    
    /*
     *      Scopes
     */
    
    public function scopePending($query)
    {
        return $query->where('verified', 0);
    }
    
    public function scopeVerified($query)
    {
        return $query->where('verified', 1);
    }
    
    public function scopeStatus($query, $value)
    {
        return $query->where('status', $value);
    }
    
    
}
