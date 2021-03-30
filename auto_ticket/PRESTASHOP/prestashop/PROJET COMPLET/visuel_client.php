<?php
require 'database.php';
$data = getAllCommandes();
?>
<!DOCTYPE html>
   <head>
      <meta charset="UTf-8">
      <title>Test Etiquette</title>
      <link rel="stylesheet" href="stylecl.css">
   </head>
   <body>
      <form class="log">

         <div id="client">
            <h3>----------------------------</h3>
            <h2><?php echo "<a>" . $data['firstname'] . $data['lastname'] . "</a>\n";?></h2>
            <h4>
               <?php echo "<a>" . $data['adresse'] . "</a>\n>";?>
               <?php echo "<a>" . $data['city'] . "</a>\n>";?>
               <?php echo "<a>" . $data['phone'] . "</a>\n>";?>
         </div>
         <h3>----------------------------</h3>
         <!--Magasins et commande-->
         <div id="order">
            <h3><?php echo "<a>" . $data['seler_name'] . "</a>\n>";?></h3>
            <h4> <!--la commande auprès du vendeur--><?php echo "<a>" . $data['seler_name'] . "</a>\n>";?></h4>
         </div><br>
         <!--Retrait
         L'input prendrait place après les :-->
         <div id="retrait">
            <h4>Lieu de retrait:<?php echo "<a>" . $data['delivery_adress'] . "</a>\n>";?> 
                <br>Heure de retrait:<?php echo "<a>" . $data['delivery_date'] . "</a>\n>";?> </h4>
            <h3>Commande: <?php echo "<a>" . $data['id'] . "</a>\n>";?>
                <br>----------------------------</h3>
         </div>
      </form>
   </body>
</html>