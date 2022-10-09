<?php 

require_once('../model/CnxClient.class.php');
$client = new CnxClient($_POST['email'],$_POST['password']);
$client->verifier();
//header('location:../index.php');
echo "oui";

?>
