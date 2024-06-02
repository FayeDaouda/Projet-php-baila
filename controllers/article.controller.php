<?php

require_once("../model/aticle-model.php");
if (isset($_REQUEST['action'])) {
  if ($_REQUEST['action']=="liste-article") {
    listerArticle();
  }elseif($_REQUEST['action']=="form-article") {
    chargerFormulaire();
  }
}else{
  listerArticle();
}


function listerArticle():void{
    $articles= findAll();
    //Appel Model pour chercher les donnees de la table article
    require_once("../views/article/liste.html.php");
}

function chargerFormulaire():void{
    $categories=findAllCategorie();
    $types=findAllType();
    require_once("../views/article/forme.html.php");
}
?>