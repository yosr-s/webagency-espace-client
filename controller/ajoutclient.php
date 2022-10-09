<?php
require_once('../../layoutt/model/client.class.php');

$client = new Client($_POST['nom'],$_POST['raison_sociale'],$_POST['adresse'],$_POST['matricule_fiscale'],$_POST['telephone'] ,$_POST['email'] ,$_POST['password']);
$client->ajouter();



header("location:../liste-devis.php?resultat=oui cree");
exit();
?>