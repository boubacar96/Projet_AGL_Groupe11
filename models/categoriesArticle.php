<?php 
	$req=$bd->query('SELECT * FROM categorie INNER JOIN article ON article.id = categorie.id');
	$categorie=$req->fetchAll();
	return $categorie;
	
 ?>