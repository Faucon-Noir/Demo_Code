<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $total = Cart::where('user_id', Auth::user()->id)->sum('quantity');
        return view('catalog', ['products'=> $products, 'total' => $total]);
    }

    public function getProduct($id)
    {
        $product = Product::findOrFail($id);
        $user = new User();
        return view('product', ['product' => $product, 'isAdmin' => $user->isAdmin()]);
    }
}
