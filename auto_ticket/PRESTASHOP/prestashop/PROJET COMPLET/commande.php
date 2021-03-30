<?php
require 'database.php';
$data = getAllCommandes();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <div class="boxBtn">
        <button class="button"><a href="commande.php"> vos commande en cours</a></button>
        <button class="button"><a href="historique.php">l'historique des commandes</a></button>
        </div>

        <form class="tableau">
            <div class="ligne"><div class="contenu">date et heure de la livraison:<!--script doit ecrire la date et heure de la livraison ici--></div>
                                <div class="contenu">lieux de livraison: <!--script doit ecrire le lieux de livraison ici--></div>
                                <div class="contenu">produit: <!--script doit ecrire le produit ici--></div>
                                <div class="contenu">nombre de produit: <!--script doit ecrire le nombre de produit à mettre entre () ici--></div>
            </div>

            <div class="ligne"><div class="contenu"><?php echo "<a>" . $data['date'] . $data['timestamp'] . "</a>\n";?><!--script doit ecrire la date et heure de la livraison ici--></div>
                                <div class="contenu"><?php echo "<a>" . $data['adresse'] . "</a>\n";?><!--script doit ecrire le numero de commande ici--></div>
                                <div class="contenu"><?php echo "<a>" . $data['product_name'] . "</a>\n";?><!--script doit ecrire le produit ici--></div>
                                <div class="contenu"><?php echo "<a>"function number_product()?><!--script doit ecrire le nombre de produit à mettre entre () ici--></div>
            </div>
        </form>
    </body>