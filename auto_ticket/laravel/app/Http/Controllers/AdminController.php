<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    /**
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'product_name' => ['required', 'string', 'max:255'],
            'product_type' => ['string', 'max:255'],
            'price' => ['required', 'integer', 'max:11'],
            'description' => ['required', 'string', 'max:255'],
            'url_image' => ['required', 'string', 'max:255'],
            'product_stock' => ['required', 'integer', 'max:11'],
        ]);
    }

    public function addProduct(Request $request)
    {
        $data = $request->all();
        if ($this->validator($data)) {
            $product = new Product();
            $product->addProduct($data);
        }

        return view('admin');
    }

    public function changeStock(Request $request, $id)
    {
        $data = $request->all();
        $product = new Product();
        $product->changeStock($data['product_stock'], $id);

        return redirect('product/' . $id);
    }
}
