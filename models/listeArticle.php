<?php 

	$req= $bd->query("SELECT id FROM article");
	$nbre_total_fichiers=$req->rowCount();
	$nbre_fichier_par_page=2;
	$nbre_fichier_max_avant_apres=2;
	$last_page=ceil($nbre_total_fichiers/$nbre_fichier_par_page);

	if($page_num <1)
	{
		$page_num = 1;
	}elseif ($page_num > $last_page) {
		$page_num = $last_page;
	}

	$limit='LIMIT '.($page_num-1)*$nbre_fichier_par_page.','.$nbre_fichier_par_page;
	$sql="SELECT * FROM article ORDER BY id DESC $limit ";
	$articles = $bd->query($sql);
	$data=$articles->fetchAll();
	return $data;
					
	// Tronquer le contenu de l'article
	function tronquer( $chaine, $max ){
    if(strlen($chaine)>=$max)
    {
	    $chaine=substr($chaine,0,$max); 
	    $espace=strrpos($chaine," "); 
	    if($espace)
	    $chaine=substr($chaine,0,$espace);
	    $chaine .= '...';
    }
    	return $chaine;
    }
										  	 

 ?>