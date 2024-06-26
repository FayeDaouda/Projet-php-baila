<?php

function findAllType(): array
{
    // Connecter à la BD
    $dsn = 'mysql:host=localhost:8889;dbname=cours_php_ism';
    $username = 'root';
    $password = 'root';
    // Essayer
    try {
        $dbh = new PDO($dsn, $username, $password);
        $sql = 'SELECT * FROM  type c'; // Correction de la requête SQL
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

function saveType(array $type): int
{
    // Connecter à la BD
    $dsn = 'mysql:host=localhost:8889;dbname=cours_php_ism';
    $username = 'root';
    $password = 'root';
    // Essayer
    try {
        extract($type);
        $dbh = new PDO($dsn, $username, $password);
        $sql = "INSERT INTO `type` (`nomType`) VALUES ('$nomType');";
         return $dbh->exec( $sql);
    } 
    // Capturer les exceptions PDO
    catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
}


?>

