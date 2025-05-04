<?php
class Commande {
    private $conn;
    private $table = "commandes";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create($id_produit, $quantite_commandee) {
        $query = "INSERT INTO " . $this->table . " (id_produit, quantite_commandee, date_commande)
                  VALUES (?, ?, NOW())";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id_produit, $quantite_commandee]);
    }
}
?>