<?php
require_once("../model/type-model.php");
if (isset($_REQUEST['action'])) {
    if ($_REQUEST['action'] == "add-type") {
        unset($_POST['action']);
        unset($_POST['controller']);
        ajouterType($_POST);
    } elseif ($_REQUEST['action'] == "liste-type") {
        listertype();
    }
}
function ajouterType(array $data): void {
    saveType($data);
    header('Location:'.WEBROOT.'/?controller=type&action=liste-type');
    }
function listertype(): void {
    $types = findAllType();
    require_once("../views/types/liste.html.php");
}
?>

