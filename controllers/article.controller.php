<?php
require_once("../model/article-model.php");
require_once("../model/categorie-model.php");
require_once("../model/type-model.php");
  if (isset($_REQUEST['action'])) {
    if ($_REQUEST['action'] == "add-article") {
        unset($_POST['action']);
        unset($_POST['controller']);
        ajouterArticle();
    } elseif ($_REQUEST['action'] == "liste-article") {
        listerArticles();
    } elseif ($_REQUEST['action'] == "forme-article") {
        chargerFormulaire();
    }
}

function ajouterArticle(): void {
    if (isset($_POST) && is_array($_POST)) {
        saveArticle($_POST);
        header('Location: '. WEBROOT . '/?controller=article&action=liste-article');
        exit;
    }
}

function listerArticles(): void {
    $articles = findAll(); // Appel à la fonction correcte
    require_once("../views/article/liste.html.php");
}

function chargerFormulaire(): void {
    $categories = findAllCategorie();
    $types = findAllType();
    require_once("../views/article/forme.html.php");
}
?>

