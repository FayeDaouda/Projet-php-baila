<?php
function findAll(): array
{
    // Connecter à la BD
    $dsn = 'mysql:host=localhost:8889;dbname=cours_php_ism';
    $username = 'root';
    $password = 'root';

    try {
        $dbh = new PDO($dsn, $username, $password);
        $sql = 'SELECT * FROM article a, categorie c, type t WHERE a.typeId = t.id AND a.categorieId = c.id';
        $stm = $dbh->query($sql);

        // Récupérer tous les résultats sous forme de tableau associatif
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    } 
    catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        return [];
    }
}



function saveArticle(array $data): int
{
    // Connecter à la BD
    $dsn = 'mysql:host=localhost:8889;dbname=cours_php_ism';
    $username = 'root';
    $password = 'root';

    try {
        $dbh = new PDO($dsn, $username, $password);
        $sql = "INSERT INTO `article` (`libelle`, `qteStock`, `prixAppro`, `typeid`, `categorieid`) VALUES ('$libelle', '$qteStock', '$prixAppro', '$typeid', '$categorieid');";
        return  $dbh->exec($sql);

    } 
    catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    
    }
}

?>
