@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('add_product') }}">
        @csrf
        <div class="content">
            <h1>Ajouter un nouveau produit</h1>
            <p>Compléter les champs ci-dessous pour ajouter un produit.</p>
            <hr>
            <label for="name"><b>Nom du produit :</b></label>
            <input type="text" placeholder="Entrer le nom de votre produit" name="product_name" id="name" required>
            <hr>
            <label for="product_type"><b>Variante du produit :</b></label>
            <input type="text" placeholder="Entrer le type de produit" name="product_type" id="product_type" required>
            <hr>
            <label for="url"><b>URL de l'image :</b></label><br>
            <input type="url" placeholder="l'url de votre image" name="url_image" id="url" required>
            <hr>
            <label for="Description"><b>Description de votre produit :</b></label><br>
            <textarea placeholder="Description" name="description" id="Description" required></textarea>
            <hr>
            <label for="price"><b>Prix :</b></label><br>
            <input type="number" placeholder="Prix du produit" name="price" id="price" min="0" required>
            <hr>
            <label for="product_stock"><b>Quantité :</b></label><br>
            <input type="number" placeholder="Quantité" name="product_stock" id="product_stock" min="0" required>
            <hr>
            <button type="submit" class="button-register">Ajouter le produit !</button>
        </div>
    </form>
@endsection
