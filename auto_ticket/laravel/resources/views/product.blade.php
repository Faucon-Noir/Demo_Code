@extends('layouts.app')
@section('content')

    <div class="font-roboto">
        <div class="title-product">
            <p>{{ $product->product_name }}</p>
            <p>{{ $product->product_type }}</p>
        </div>
        <div style="margin: auto">
            <img src="{{$product->url_image}}" style="height: 350px; width: 350px;margin-left: 42%">
        </div>
        <br><br>
        <div style="margin-left: 50%">
            <span class="price">Prix :</span>
            <span itemprop="price" class="price">{{$product->price}} euros</span><br><br>
            <form method="POST" action="{{ route('add_product_in_cart', $product->id) }}">
                @csrf
                <button type="submit" class="button-pay">Acheter</button>
            </form>
            <br><br>
        </div>
        <div class="product-description">
            <p>
                <span itemprop="Catégorie" class="categorie">En stock : {{$product->product_stock}} </span><br><br>
                {{  $product->description }}
            </p>
        </div>
        <br><br><br>
        @if($isAdmin)
            <div style="margin-left: 30%; margin-right: 30%">
            <form method="POST" action="{{ route('change_stock', $product->id) }}">
                @csrf
                <label for="product_stock"><b>Quantité :</b></label><br>
                <input type="number" placeholder="Quantité" name="product_stock" id="product_stock" min="0" required>
                <hr>
                <button type="submit" class="button-register">Ajouter le produit !</button>
            </form>
            </div>
    @endif
@endsection
