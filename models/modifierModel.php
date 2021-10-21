<?php 
	session_start();
	$message="";
	$succes="";
	if(!isset($mod))
	  {
	    header('location:dashboad');
	  }else{
	    $id=$mod;
	  }
	$id=$mod;
	$selection=$bd->query('SELECT * FROM article WHERE id='.$id);
	$parc=$selection->fetch();

	if (isset($_POST['modifier'])) {
		$newTitre=$_POST['titre'];
		$newContenu=$_POST['contenu'];
		$newCategorie=$_POST['categorie'];

		if ($newTitre && $newContenu && $newCategorie) {
			$req = $bd->prepare('UPDATE article SET 
				titre=:titre,
				contenu=:contenu,
				categorie=:categorie,
				dateModification=NOW() 
				WHERE id=:num LIMIT 1');
			$req->bindValue(':num',$id,PDO::PARAM_INT);
			$req->bindValue(':titre',$newTitre,PDO::PARAM_STR);
			$req->bindValue(':contenu',$newContenu,PDO::PARAM_STR);
			$req->bindValue(':categorie',$newCategorie,PDO::PARAM_INT);

			$req->execute();
   
                $succes="Article Mise a jour avec succes";
		}else{
			$message="Veuillez saisir tous les champs";
		}
	}

	

 ?>