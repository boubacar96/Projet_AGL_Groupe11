<?php 
	session_start();
	$message="";
	if(!isset($sup))
	  {
	    header('location:dashboad');

	  }else{
	    
	    $id=$sup;
	  }

	$id=$sup;

	$suppression=$bd->query("DELETE FROM article WHERE id='$id' LIMIT 1");

	if($suppression)
	{
		$message="<span style='color:green'>Suppression de l'article  réussis</sapn>";
	}else{
		$message="<span style='color:red'>Erreur de suppression de l'article</span>";
	}

 ?>