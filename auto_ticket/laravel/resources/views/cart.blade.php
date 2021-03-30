@extends('layouts.app')
@section('content')
    <div style="margin-right: 20%; margin-left: 20%">
        <table>
            <thead>
            <div class="td-panier">
                <th colspan="2">Nom de l'article</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Supprimer</th>
            </div>
            </thead>
            @foreach ($carts as $cart)
                <tbody>

                <div class="tfoot-panier">

                    <td colspan="2">{{  $cart->product_name  }}</td>
                    <td>{{  $cart->price  }}</td>
                    <td>{{ $cart->quantity }}</td>

                    <td>
                        <form method="POST" action="{{ route('delete_product_in_cart', $cart->id) }}">
                            @csrf
                            <button type="submit"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </div>
                </tbody>

            @endforeach
        </table>
        <br>
        <h2>Total : {{  $total  }}</h2>
        <button type="button" style="margin-left: 40%">Payer</button>
    </div>
@endsection
