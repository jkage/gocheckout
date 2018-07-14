<?php

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Database\Seeder;

class CartsItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cart_item')->truncate();

        foreach(Cart::all() as $cart){
            for ($k = 0 ; $k < rand(4, 15); $k++){
                $item = Item::inRandomOrder()->first();
                $cart->items()->syncWithoutDetaching([$item->id]);
                self::addPhoneNumber($item, $cart);
            }
        }
    }

    public function addPhoneNumber($item, $cart){
        $phone_numbers = ['772000111', '757111001', '773123456'];
        $random_phone = $phone_numbers[array_rand($phone_numbers)];
        $cart->items()
              ->updateExistingPivot($item->id, [
                  'phone_number' => $random_phone
              ]);
    }
}
