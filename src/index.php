<?php
require_once 'config/database.php';

$db = (new Database())->getConnection();

$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

switch ($controller) {
    case 'produit':
        require_once 'controllers/ProduitController.php';
        $ctrl = new ProduitController($db);
        break;
    case 'fournisseur':
        require_once 'controllers/FournisseurController.php';
        $ctrl = new FournisseurController($db);
        break;
    case 'commande':
        require_once 'controllers/CommandeController.php';
        $ctrl = new CommandeController($db);
        break;
    default:
        include 'views/home.php';
        exit;
}

if (method_exists($ctrl, $action)) {
    $ctrl->$action();
} else {
    echo "Action non trouvée";
}
?>