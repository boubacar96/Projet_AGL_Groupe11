<?php 
$req=$bd->query('SELECT * FROM categorie');
$donnee=$req->fetchAll();
return $donnee;


 ?>