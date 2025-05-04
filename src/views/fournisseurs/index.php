<h2>Fournisseurs</h2>
<a href="?controller=fournisseur&action=create">Ajouter un fournisseur</a>
<table border="1">
    <tr>
        <th>Nom</th>
        <th>Contact</th>
    </tr>
    <?php while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?= htmlspecialchars($row['nom']) ?></td>
            <td><?= htmlspecialchars($row['contact']) ?></td>
        </tr>
    <?php endwhile; ?>
</table>