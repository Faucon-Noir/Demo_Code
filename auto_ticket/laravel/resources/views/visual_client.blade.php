@extends('layouts.app')

@section('content')

        <link rel="stylesheet" href="style5.css">
    </head>
    <body>
    <form class="log">
        <!-- Les tailles de polices
        <h1>F</h1><h2>F</h2><h3>F</h3><h1>----------</h1><h2>----------</h2><h3>----------</h3>
        <br><br>-->

        <!--Les données
        je pensais à un input entre les balise de texte pour récup les données-->
        <!--Nom du client, adresse et contact-->
        <div id="client">
            <h3>----------------------------</h3>
            <h2>Eric FELIX</h2>
            <h4><!-- adresse contact etc-->17 Avenue du Générale de Gaulle, <br>
                Rambouillet 78120 <br>
                France <br>
                0120034005</h4>
        </div>
        <h3>----------------------------</h3>
        <!--Magasins et commande-->
        <div id="order">
            <h3><!--le vendeur-->La boulange de Jacquelines</h3>
            <h4> <!--la commande auprès du vendeur-->1 pain, 4 pain au chocolat, 12 croissants</h4>
        </div><br>
        <!--Retrait
        L'input prendrait place après les :-->
        <div id="retrait">
            <h4>Lieu de retrait: 15 rue de Pari <br>Heure de retrait: 10h30 </h4>
            <h3>Commande: <br>----------------------------</h3>
        </div>
    </form>
    <div class="imprimer">
        <input id="impression" name="impression" type="submit" onclick="imprimer_page()" value="Exporter en pdf " />
    </div>

    <script type="text/javascript">
           function imprimer_page(){
           window.print();
            }
       </script>
    <PHP header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    ?>
    </body>
@endsection
