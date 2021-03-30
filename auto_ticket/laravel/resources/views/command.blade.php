@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="style4.css">

</head>
<body>
<div class="boxBtn">
    <a href="{{ route('historic') }}">
        <button class="registerbtn" style="float: right; margin-right: 8%">Historique</button>
    </a>
</div>

<form class="tableau">
    <div class="ligne"><div class="contenu">date et heure de la livraison:<!--script doit ecrire la date et heure de la livraison ici--></div>
        <div class="contenu">lieux de livraison: <!--script doit ecrire le lieux de livraison ici--></div>
        <div class="contenu">produit: <!--script doit ecrire le produit ici--></div>
        <div class="contenu">nombre de produit: <!--script doit ecrire le nombre de produit à mettre entre () ici--></div>
    </div>

    <div class="ligne"><div class="contenu">12/12/2020<br>15h00:<!--script doit ecrire la date et heure de la livraison ici--></div>
        <div class="contenu">15 rue de mon couleur<br>92000<!--script doit ecrire le numero de commande ici--></div>
        <div class="contenu">fraise<br>vanille<br>chocolat<br> <!--script doit ecrire le produit ici--></div>
        <div class="contenu">25<br>12<br>5<br> <!--script doit ecrire le nombre de produit à mettre entre () ici--></div>
    </div>
</form>
</body>

@endsection

