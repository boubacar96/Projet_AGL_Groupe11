<?php 
session_start();
$err="";

	$users=$bd->query('SELECT * FROM users');
	$parcourir=$users->fetchAll();
	if(isset($_POST['submit'])) {
		$login=$_POST['login'];
		$password=$_POST['password'];
		if($login && $password)
		{
			$rech=$bd->query("SELECT login,password FROM admin WHERE login='$login' AND password='$password'");
			$tup=$rech->fetch();
			if($tup['login']==$login AND $tup['password']==$password)
			{
				$_SESSION['login']=$login;
				header('location:dashboadAdmin');

			}else{
				$err="Login ou password incorrect";
			  }
		}else{
			$err="Veuillez saisir le login et le password";
		  }
	}

 ?>