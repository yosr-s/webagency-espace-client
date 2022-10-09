<?php
class CnxClient{
private $email;
private $password;

        
function __construct($email,$password){
$this->email = $email;
$this->password = $password;


}


public function verifier(){ 

    include('../../layoutt/includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM client WHERE email = '$this->email' AND password = '$this->password'");
    $resultat = $req->fetch();

  if (!$resultat)
{
  header('location:../login.php?mess=error');
  
}
   else
{
       session_start();

       $_SESSION['id'] = $resultat['id'];
       $_SESSION['nom'] = $resultat['nom'];
       $_SESSION['raison_sociale'] = $resultat['raison_sociale'];
       $_SESSION['adresse'] = $resultat['adresse'];
       $_SESSION['matricule_fiscale'] = $resultat['matricule_fiscale'];
       $_SESSION['telephone'] = $resultat['telephone'];
       $_SESSION['email'] = $resultat['email'];
       $_SESSION['password'] = $resultat['password'];
       
       
	   
	header('location:../liste-devis.php');


} 

}
}


$client = new CnxClient($_POST['email'],$_POST['password']);


?>