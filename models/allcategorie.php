<?php 

	$req=$bd->query('SELECT * FROM categorie');
	$categorie=$req->fetchAll();
	return $categorie;
 ?>