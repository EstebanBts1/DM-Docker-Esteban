<?php
require_once __DIR__ . '/../models/Produit.php';

class ProduitController {
    private $produit;

    public function __construct($db) {
        $this->produit = new Produit($db);
    }

    public function index() {
        $result = $this->produit->getAll();
        include __DIR__ . '/../views/produits/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->produit->create($_POST['nom'], $_POST['description'], $_POST['quantite'], $_POST['prix'], $_POST['id_fournisseur']);
            header('Location: /?controller=produit&action=index');
        } else {
            include __DIR__ . '/../views/produits/create.php';
        }
    }
}
?>