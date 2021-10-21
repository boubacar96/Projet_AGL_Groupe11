<?php 
	$req=$bd->query('SELECT * FROM article ORDER BY id DESC');
	$sth=$req->fetchAll();
	return $sth;
 ?>