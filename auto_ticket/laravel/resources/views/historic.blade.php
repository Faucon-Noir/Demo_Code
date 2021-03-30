@extends('layouts.app')

@section('content')

    <html>
    <head>
        <link rel="stylesheet" href="style4.css">

    </head>
    <body>
    <div class="boxBtn">
        <a href="{{ route('visual_client') }}">
            <button class="registerbtn" style="float: right; margin-right: 8%">Visuel Client</button>
        </a>
    </div>

    <form class="tableau">
        <div class="ligne"><div class="contenu">date et heure de la livraison:</div>
            <div class="contenu">lieux de livraison: </div>
            <div class="contenu">produit: </div>
            <div class="contenu">nombre de produit:</div>
        </div>
        <div class="ligne"><div class="contenu">12/12/2018<br>10h30:</div>
            <div class="contenu">17 Avenue du Générale de Gaulle<br>78120</div>
            <div class="contenu">pain<br>pain au chocolat<br>croissant<br> </div>
            <div class="contenu">1<br>4<br>12<br></div>
        </div>
    </form>
    </body>


<!--faire un scripte qui créer la base du tableau et qui ajoute les valeur ne pas enlever le premier qui sert d'indication ne pas changer les couleurs (pour l'instant)-->

@endsection
