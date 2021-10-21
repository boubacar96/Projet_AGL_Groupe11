<?php 
session_start();
$erreur="";
$msg="";
if(isset($_POST['submit']))
{
	$libelle=$_POST['nomcategorie'];
	if($libelle){
		$requete=$bd->prepare('INSERT INTO categorie(libelle) VALUES (:libelle)');
		$requete->execute(array(
                            ':libelle' => $libelle
                            ));
                $msg="categorie Ajouter avec succes";
	}else{
		$erreur="Veuillez saisir le categorie";
	}
}

?>