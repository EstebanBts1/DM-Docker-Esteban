<h2>Produits</h2>
<a href="?controller=produit&action=create">Ajouter un produit</a>
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Quantité</th>
        <th>Prix</th>
        <th>Fournisseur</th>
    </tr>
    <?php while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?= htmlspecialchars($row['nom']) ?></td>
            <td><?= htmlspecialchars($row['description']) ?></td>
            <td><?= htmlspecialchars($row['quantite']) ?></td>
            <td><?= htmlspecialchars($row['prix_unitaire']) ?> €</td>
            <td><?= htmlspecialchars($row['id_fournisseur']) ?></td>
        </tr>
    <?php endwhile; ?>
</table>