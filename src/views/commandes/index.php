<h2>Commandes</h2>
<a href="?controller=commande&action=create">Passer une commande</a>
<table border="1">
    <tr>
        <th>Produit</th>
        <th>Quantité commandée</th>
        <th>Date de commande</th>
    </tr>
    <?php while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?= htmlspecialchars($row['id_produit']) ?></td>
            <td><?= htmlspecialchars($row['quantite_commandee']) ?></td>
            <td><?= htmlspecialchars($row['date_commande']) ?></td>
        </tr>
    <?php endwhile; ?>
</table>