<?php 
	session_start();
	$tlc="";
	$succes="";
	if(isset($_POST['submit']))
	{
		$titre=$_POST['titre'];
		$contenu=$_POST['contenu'];
		$categorie=$_POST['categorie'];

		if ($titre && $contenu && $categorie) {
			$req = $bd->prepare("
                    INSERT INTO article(titre,contenu,dateCreation,dateModification,categorie)
                    VALUES (:titre, :contenu,NOW(),NOW(),:categorie)
                ");
                $req->execute(array(
                                    ':titre' => $titre,
                                    ':contenu' => $contenu,
                                    ':categorie' => $categorie
                                    ));
                $succes="Article Publier avec succes";
		}else{
			$tlc="Veuillez saisir tous les champs";
		}
	}

 ?>