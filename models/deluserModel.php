<?php 
session_start();
	$message="";
	if(!isset($userdel))
	  {
	    header('location:dashboad');

	  }else{
	    
	    $id=$userdel;
	  }

	$id=$userdel;

	$suppression=$bd->query("DELETE FROM users WHERE id='$id' LIMIT 1");

	if($suppression)
	{
		$message="<span style='color:green'>Suppression utilisateur  réussis</sapn>";
	}else{
		$message="<span style='color:red'>Erreur de suppression de l'utilisateur</span>";
	}

 ?>