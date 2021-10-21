<?php
  class Categorie {
    // DB Stuff
    private $conn;
    private $table = 'categorie';

    // Properties
    public $id;
    public $libelle;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get categories
    public function lister() {
      // Create query
      $query = 'SELECT
        id,
        libelle
      FROM
        ' . $this->table . '
      ORDER BY
        libelle DESC';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }
}
?>