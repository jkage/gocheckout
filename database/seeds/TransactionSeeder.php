<?php

use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedForAllCarts();
    }

    public function seedForAllCarts()
    {
        $carts = Cart::all();
        foreach ($carts as $cart) {
            $transaction              = new Transaction;
            $transaction->cart_id     = $cart->id;
            $transaction->items_count = $cart->items()->count();
            $transaction->amount      = Transaction::getAmount($cart);
            $transaction->save();
        }
    }
}
