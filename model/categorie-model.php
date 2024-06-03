<?php

function findAllCategorie(): array
{
    // Connecter à la BD
    $dsn = 'mysql:host=localhost:8889;dbname=cours_php_ism';
    $username = 'root';
    $password = 'root';

    // Essayer
    try {
        $dbh = new PDO($dsn, $username, $password);
        $sql = 'SELECT * FROM categorie c'; // Correction de la requête SQL
        $stm = $dbh->query($sql);

        // Récupérer tous les résultats sous forme de tableau associatif
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    } 
    // Capturer les exceptions PDO
    catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        return [];
    }
}


?>

