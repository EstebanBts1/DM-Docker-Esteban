<?php
require_once __DIR__ . '/../models/Commande.php';

class CommandeController {
    private $commande;

    public function __construct($db) {
        $this->commande = new Commande($db);
    }

    public function index() {
        $result = $this->commande->getAll();
        include __DIR__ . '/../views/commandes/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->commande->create($_POST['id_produit'], $_POST['quantite_commandee']);
            header('Location: /?controller=commande&action=index');
        } else {
            include __DIR__ . '/../views/commandes/create.php';
        }
    }
}
?>