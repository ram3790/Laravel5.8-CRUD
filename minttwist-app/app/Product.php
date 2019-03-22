<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $attributes = [
        'status' => 1
    ];

    public function getStatusAttributes($attribute)
    {
        return $this->statusOptions()[$attribute];
    }
    
    public function statusOptions()
    {
        return [
            0 => 'Inactive',
            1 => 'Active',
            2 => 'In-Progress',
        ];
    }

    public function scopeActiveProducts()
    {
        return $query->where('status', 1);
    }

    public function scopeInactiveProducts()
    {
        return $query->where('status', 0);        
    }

    public function scopeInProgressProducts()
    {
        return $query->where('status', 2);        
    }
}
