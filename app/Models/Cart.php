<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'store_id',
        'phone_number',
        'is_checked_out'
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class)
                    ->withTimestamps()
                    ->withPivot('phone_number');
    }
}
