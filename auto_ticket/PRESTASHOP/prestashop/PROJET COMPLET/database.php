<?php

function getDatabaseConnexion() {
    try {
        $user = "root";
        $pass = "";
        $pdo = new PDO('mysql:host=localhost;dbname=auto', $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
function getAllCommandes() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * FROM command LEFT JOIN users u on command.users_id = u.id LEFT JOIN product p on u.id = p.user_id;';
    $rows = $con->query($requete);
    return $rows;
}


function getCurrentCommande() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * FROM command LEFT JOIN users u on command.users_id = u.id LEFT JOIN product p on u.id = p.user_id;';
    $rows = $con->query($requete);
    $printcommand = $data['delivery_date']
    if(date('d/m/Y') = $printcommand){

    }
}