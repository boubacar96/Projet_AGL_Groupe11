<?php
class Article{
     // Attribut de la base de donnée par rapport à la table
     public $conn;
     public $table = 'article';
     
     // Attribut public concernant la table categorie
     
     public $id;
     public $titre;
     public $contenu;
     public $dateCreation;
     public $dateModification;
     public $categorie;

     //Constructeur Db

     
     public function __construct($db){
          $this->conn = $db;
     }

     //Article
     public function lister(){
          $query ='SELECT c.libelle as categorieName,a.id,a.titre,a.contenu,a.dateCreation,a.dateModification,a.categorie 
     
          FROM '.$this->table. ' a 
          LEFT JOIN
              categorie c ON a.categorie=c.id
          ORDER BY
              a.dateCreation DESC';
          
               
           //Prepare requete
          $stmt =$this->conn->prepare($query);

          // Exeecution
          $stmt->execute();
          
          return $stmt;
     
     }

}
?>