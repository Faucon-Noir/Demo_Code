@extends('layouts.app')
@section('content')
    <h1>Catalogue</h1>
    <br>
    <a href="{{ route('cart') }}">
        <button class="registerbtn" style="float: right; margin-right: 8%">Panier({{ $total }})</button>
    </a>
    <a href="{{ route('command') }}">
        <button class="registerbtn" style="float: right; margin-right: 8%">Commande</button>
    </a>
    <div class="catalog-box">
        @foreach ($products as $product)
            <div style="width: 350px;margin-bottom: 50px;">
                <div class="space-article">
                    <table>
                        <thead>
                        <tr>
                            <th colspan="2"><a>{{ $product->product_name }}</a><br><a href="#" target="_blank">
                                    <img src="{{ $product->url_image }}" style="height: 156px; width: 156px"
                                         alt="product_image"/></a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <form method="POST" action="{{ route('add_product_in_cart', $product->id) }}">
                                    @csrf
                                        <button type="submit" class="registerbtn">Achat direct</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('get_product', $product->id) }}">
                                    <button type="button" class="registerbtn">Description</button>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
@endsection
