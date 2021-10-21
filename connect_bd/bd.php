<?php 
	try {
	    $bd = new PDO('mysql:host=localhost;dbname=mglsi_news', 'root', '');
	    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e) {
    	echo 'Échec lors de la connexion : ' . $e->getMessage();
	}
 ?>