<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'cart_id',
        'items_count',
        'amount'
    ];

    public static function getAmount(Cart $cart)
    {
        $amount = 0;
        foreach ($cart->items as $item) {
            $amount += $item->price;
        }

        return $amount;
    }
}
