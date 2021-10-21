<?php 
	session_start();
	$message="";
	$succes="";
	if(!isset($upcateg))
	  {
	    header('location:gesca');
	  }else{
	    $id=$upcateg;
	  }
	$id=$upcateg;
	$selection=$bd->query('SELECT * FROM categorie WHERE id='.$id);
	$parc=$selection->fetch();
	if (isset($_POST['modifier'])) {
		$newLibelle=$_POST['libelle'];
		if ($newLibelle) {
			$req = $bd->prepare('UPDATE categorie SET 
				libelle=:libelle 
				WHERE id=:num LIMIT 1');
			$req->bindValue(':num',$id,PDO::PARAM_INT);
			$req->bindValue(':libelle',$newLibelle,PDO::PARAM_STR);
			$req->execute();
                $succes="Categorie Mise a jour avec succes";
		}else{
			$message="Veuillez saisir le categorie";
		}
	}
 ?>