<?php 
	session_start();
	$err='';
	if (isset($_POST['submit'])) {
		$ide=$_POST['ide'];
		$password=$_POST['mdp'];

		if($ide && $password)
		{
			$rech=$bd->query("SELECT identifiant,password FROM users WHERE identifiant='$ide' AND password='$password'");
			$tup=$rech->fetch();
			if($tup['identifiant']==$ide AND $tup['password']==$password)
			{
				$_SESSION['identifiant']=$ide;
				header('location:dashboad');

			}else{
				$err="Login ou password incorrect";
			  }

		}else{
			$err="Veuillez saisir le login et le password";
		  }
	}
 ?>