<?php
require_once __DIR__ . '/../models/Fournisseur.php';

class FournisseurController {
    private $fournisseur;

    public function __construct($db) {
        $this->fournisseur = new Fournisseur($db);
    }

    public function index() {
        $result = $this->fournisseur->getAll();
        include __DIR__ . '/../views/fournisseurs/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->fournisseur->create($_POST['nom'], $_POST['contact']);
            header('Location: /?controller=fournisseur&action=index');
        } else {
            include __DIR__ . '/../views/fournisseurs/create.php';
        }
    }
}
?>