<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../configuration/Db.php';
  include_once '../../models/Categorie.php';

  // Instantiate DB & connect
  $database = new Db();
  $db = $database->connect();

  // Instantiate category object
  $category = new Categorie($db);

  // Category read query
  $result = $category->lister();
  
  // Get row count
  $num = $result->rowCount();

  // Check if any categories
  if($num > 0) {
        // Cat array
        $cat_arr = array();
        $cat_arr['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
          extract($row);

          $cat_item = array(
            'id' => $id,
            'libelle' => $libelle
          );

          // Push to "data"
          array_push($cat_arr['data'], $cat_item);
        }

        // Turn to JSON & output
        //echo json_encode($cat_arr);
        echo xmlrpc_encode($cat_arr);

  } else {
        // No Categories
        echo json_encode(
          array('message' => 'No Categories Found')
        );
  }
