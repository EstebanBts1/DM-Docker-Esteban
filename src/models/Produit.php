<?php
class Produit {
    private $conn;
    private $table = "produits";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function create($nom, $description, $quantite, $prix, $id_fournisseur) {
        $query = "INSERT INTO " . $this->table . " (nom, description, quantite, prix_unitaire, id_fournisseur)
                  VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$nom, $description, $quantite, $prix, $id_fournisseur]);
    }
}
?>