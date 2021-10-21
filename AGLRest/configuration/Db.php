<?php
class Db{
     //Attribut de la classe
     private $host='localhost';
     private $db_name='mglsi_news';
     private $username='root';
     private $password='';
     private $conn;

     //Connection à la base de donnée
     public function connect(){
          $this->conn = null;
          try {
               $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
               $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
          } catch (PDOException $e) {
             
               echo 'Connection Error: ' . $e->getMessage();
               
          }
          return $this->conn;
     }
   
}
?>