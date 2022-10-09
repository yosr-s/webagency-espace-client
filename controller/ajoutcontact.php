<?php
require_once('../../layoutt/Model/contact.class.php');

$contact = new Contact($_POST['nom'],$_POST['email'],$_POST['sujet'],$_POST['message']);
$contact->ajouter();

header("location:../contact.php?resultat=oui");
exit();
?>