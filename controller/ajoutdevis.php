<?php
require_once('../model/devis.class.php');

$devis = new devis($_POST['nomservice'],$_POST['nomclient'],$_POST['email'],$_POST['adresse'],$_POST['telephone'],$_POST['deadline']);
$devis->ajouter();

header("location:../liste-devis.php?resultat=oui");
exit();
?>