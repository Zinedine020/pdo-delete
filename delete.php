<?php
$servername = "localhost";
$username = "root";
$password = "Zinedine020";
$dbname = "winkel";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if (isset($_GET['product_code'])) {
    $productCode = $_GET['product_code'];

    $query = "DELETE FROM producten WHERE id = :productCode";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':productCode', $productCode);
    $stmt->execute();
}

header("Location: index.php");
exit;
?>
