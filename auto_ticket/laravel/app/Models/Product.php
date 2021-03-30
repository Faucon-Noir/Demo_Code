<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'product_name',
        'product_type',
        'url_image',
        'description',
        'price',
        'product_stock',
    ];

    public function addProduct($data)
    {
        $this->product_name = $data['product_name'];
        $this->product_type = $data['product_type'];
        $this->seller_id = $data[''];
        $this->price = $data['price'];
        $this->url_image = $data['url_image'];
        $this->description = $data['description'];
        $this->product_stock = $data['product_stock'];
        $this->save();
    }

    public function changeStock($newStock, $id)
    {
        $product = $this::find($id);
        $product->product_stock = $newStock;
        $product->save();
    }


}


