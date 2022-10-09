<?php
require_once('../Model/devis.class.php');

$devis = new devis($_POST['nomservice'],$_POST['nomclient'],$_POST['email'],$_POST['adresse'],$_POST['telephone'],$_POST['deadline']);
$devis->modifier();

header("location:../liste-devis.php?resultat=oui modif");
exit();
?>