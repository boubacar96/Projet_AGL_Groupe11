<?php 
	include_once('connect_bd/bd.php');
	$url='';
	
	if (isset($_GET['url'])){
		$url=explode('/', $_GET['url']);	
	}
	
	if($url==''){
		$page_num=1;
		require 'models/listeArticle.php';
		require 'vues/articles.php';
	}elseif($url[0]=='info' AND !empty($url[1])){
		$id=$url[1];
		require 'models/infoModel.php';
		require 'vues/info.php';
	}elseif(is_int($url[0])){
		$page_num=$url[0];
		require 'models/listeArticle.php';
		require 'vues/articles.php';
	}elseif($url[0]=='auth'){
		require 'models/authModel.php';
		require 'vues/authentification.php';
	}elseif($url[0]=='dashboad'){
		require 'models/authModel.php';
		require 'models/dashModel.php';
		require'vues/dashboad.php';
	}elseif($url[0]=='ajout'){
		require 'models/ajoutModel.php';
		require 'models/categoriesArticle.php';
		require 'vues/ajout.php';
	}elseif($url[0]=='gesca'){
		require 'models/gescaModel.php';
		require 'vues/gesca.php';
	}elseif($url[0]=='ajoutcateg'){
		require 'models/ajoutcategModel.php';
		require 'vues/ajoutcateg.php';
	}
	elseif($url[0]=='delarticle' AND !empty($url[1])){
		$sup=$url[1];
		require 'models/delArticleModel.php';
		require 'vues/delArticle.php';
	}elseif($url[0]=='delarticle' AND $url[1]=='prec'){
		require 'vues/dashboad.php';
	}elseif($url[0]=='modifier' AND !empty($url[1])){
		$mod=$url[1];
		require 'models/categoriesArticle.php';
		require 'models/modifierModel.php';
		require 'vues/modifier.php';
	}elseif($url[0]=='admin'){
		require 'models/adminModel.php';
		require 'vues/admin.php';

	}elseif($url[0]=='dashboadAdmin'){
		require 'models/adminModel.php';
		require 'vues/dashboadAdmin.php';
	}elseif($url[0]=='ajoutuser'){
		require 'models/ajoutUsersModel.php';
		require 'vues/ajoutuser.php';
	}elseif($url[0]=='deluser' AND !empty($url[1])){
		$userdel=$url[1];
		require 'models/deluserModel.php';
		require 'vues/deluser.php';
	}elseif($url[0]=='delcateg' AND !empty($url[1])){
		$categdel=$url[1];
		require 'models/delcategModel.php';
		require 'vues/delcateg.php';
	}elseif($url[0]=='updatecateg' AND !empty($url[1])){
		$upcateg=$url[1];
		require 'models/updatecategModel.php';
		require 'vues/updatecateg.php';
	}
	elseif($url[0]=='logoutAdmin'){
		require 'models/adminModel.php';
		require 'vues/logoutAdmin.php';
	}
	elseif($url[0]=='logout'){
		require 'models/authModel.php';
		require 'vues/authentification.php';
	}elseif ($url[0]=='categories'){
		require 'models/allcategorie.php';
		require 'vues/listeCategorie.php';
	}elseif($url[0]=='ca' AND !empty($url[1])){
		$cat=$url[1];
		include 'models/modelCategorie.php';
		include 'vues/articleParCategorie.php';
	}else{
		$page_num=$url[0];
		require 'models/listeArticle.php';
		require 'vues/articles.php';
	}	


 ?>