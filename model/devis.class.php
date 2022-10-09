<?php
class devis{
private $nomservice;
private $nomclient;
private $email;
private $adresse;
private $telephone;
private $deadline;

                

function __construct($nomservice,$nomclient,$email,$adresse, $telephone, $deadline){
$this->nomservice = $nomservice;
$this->nomclient = $nomclient;
$this->email = $email;
$this->adresse = $adresse;
$this->telephone = $telephone;
$this->deadline = $deadline;



}

public function ajouter(){ 

include('../../layoutt/includes/connect_db.php');
    
	
    
		$req = $bdd->exec ("INSERT INTO `devis`(`nomservice`,`nomclient`, `email`, `adresse`, `telephone`, `deadline`) VALUES ('$this->nomservice','$this->nomclient','$this->email','$this->adresse','$this->telephone','$this->deadline')");
		
		echo'oui';
               
    
}


    public function modifier(){ 

    include('../../layoutt/includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec("UPDATE `devis` SET `nomservice`='$this->nomservice',`nomclient`='$this->nomclient',`email`='$this->email',`adresse`='$this->adresse',`telephone`='$this->telephone',`deadline`='$this->deadline' WHERE id=$id");
				
        
        echo'oui';
        //return TRUE;
 			}	
			
public function supprimer(){ 
    
	include('../../layoutt/includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM devis WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}


}


//$instance = new User($_POST['nom'],$_POST['nomclient'],$_POST['email'],$_POST['email'],$_POST['pass'],$_POST['deadline']);


?>