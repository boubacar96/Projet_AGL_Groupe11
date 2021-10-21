<?php 
	$req=$bd->query("SELECT * FROM article, categorie WHERE article.categorie = categorie.id AND categorie.libelle='$cat' ORDER BY article.id DESC");
	$categorieModel=$req->fetchAll();
	return $categorieModel;	
	
?>