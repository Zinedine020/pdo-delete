<?php

$servername = "localhost";
$username = "root";
$password = "Zinedine020";
$dbname = "winkel";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


$query = "SELECT * FROM producten ORDER BY naam";
$stmt = $conn->prepare($query);
$stmt->execute();
$producten = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Producten</title>
</head>
<body>
    <h1>Producten</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Prijs per stuk</th>
            <th>Beschrijving</th>
        </tr>
        <?php foreach ($producten as $product): ?>
            <tr>
                <td><?php echo $product['id']; ?></td>
                <td><?php echo $product['naam']; ?></td>
                <td><?php echo $product['prijs_per_stuk']; ?></td>
                <td><?php echo $product['beschrijving']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="delete.php?product_code=2">Verwijder product 2</a>
</body>
</html>
