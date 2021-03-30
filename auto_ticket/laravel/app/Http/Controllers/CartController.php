<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
       $carts = Cart::where('user_id', Auth::user()->id)->leftJoin('product', 'cart.product_id', '=', 'product.id')->get();
       $total = 0;
       foreach ($carts as $cart) {
           $total += $cart['price'];
       }
        return view('cart', ['carts' => $carts, 'total' => $total]);
    }

    public function addProduct($productId)
    {
        $cart = new Cart();
        $cart->addProduct($productId);
        $carts = Cart::where('user_id', Auth::user()->id)->leftJoin('product', 'cart.product_id', '=', 'product.id')->get();
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart['price'];
        }
        return view('cart', ['carts' => $carts, 'total' => $total]);
    }

    public function deleteProduct($productId)
    {
        $cart = new Cart();
        $cart->deleteProduct($productId, Auth::user()->id);
        $carts = Cart::where('user_id', Auth::user()->id)->leftJoin('product', 'cart.product_id', '=', 'product.id')->get();
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart['price'];
        }
        return view('cart', ['carts' => $carts, 'total' => $total]);
    }
    
}
