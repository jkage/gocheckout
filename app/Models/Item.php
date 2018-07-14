<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'barcode',
        'price',
        'image_url'
    ];

    public function carts()
    {
        return $this->belongsToMany(Cart::class)
                    ->withTimestamps()
                    ->withPivot('phone_number');
    }
}
