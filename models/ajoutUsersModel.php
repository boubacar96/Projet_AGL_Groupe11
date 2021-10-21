<?php 
	session_start();
	$tlc="";
	$succes="";
	if(isset($_POST['submit']))
	{
		$login=$_POST['login'];
		$password=$_POST['password'];

		if ($login && $password) {
			$req = $bd->prepare("
                    INSERT INTO users(identifiant,password)
                    VALUES (:identifiant, :password)
                ");
                $req->execute(array(
                                    ':identifiant' => $login,
                                    ':password' => $password
                                    ));
                $succes="Editeur Ajouter avec succes";
		}else{
			$tlc="Veuillez saisir tous les champs";
		}
	}

 ?>