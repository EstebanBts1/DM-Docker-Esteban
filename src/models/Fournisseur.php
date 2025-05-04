<?php
class Fournisseur {
    private $conn;
    private $table = "fournisseurs";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create($nom, $contact) {
        $query = "INSERT INTO " . $this->table . " (nom, contact)
                  VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$nom, $contact]);
    }
}
?>