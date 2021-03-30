<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';

    public function addProduct($productId)
    {
        $userId = Auth::user()->id;
        $cart = Cart::where('user_id', $userId)->where('product_id', $productId)->first();
        if (!empty($cart['quantity'])) {
            $cart->quantity = $cart->quantity + 1;
            $cart->save();
        } else {
            $this->user_id = $userId;
            $this->product_id = $productId;
            $this->quantity = 1;
            $this->save();
        }
    }

    public function deleteProduct($productId, $userId)
    {
        $cart = Cart::where('user_id', $userId)->where('product_id', $productId)->first();
        if ($cart->quantity == 1) {
            $cart->delete();
        } else {
            $cart->quantity = $cart->quantity - 1;
            $cart->save();
        }
    }
}
