<?php
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');

include_once '../../configuration/Db.php';
include_once '../../models/Article.php';

$database=new Db();
$db=$database->connect();

//Article
$article= new Article($db);

$result=$article->lister();
$articleArray=array();
$articleArray['data']=array();

while($row=$result->fetch(PDO::FETCH_ASSOC)){
          extract($row);

          $article_item=array(
               'id'=> $id,
               'title'=>utf8_encode($titre),
               'contenu'=>$contenu,
               'dateCreation'=>$dateCreation,
               'dateModification'=>$dateModification,
               'categorie'=>$categorie

          );
     array_push($articleArray,$article_item);

     
}

//echo json_encode($articleArray);
echo xmlrpc_encode($articleArray);

?>