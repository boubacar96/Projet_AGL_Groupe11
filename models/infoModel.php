<?php 
	$requ=$bd->query("SELECT * FROM article WHERE id ='$id'");
	$tt=$requ->fetchAll();
	return $tt;

 ?>