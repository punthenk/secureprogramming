<?php
// Haal transacties op uit de database
$stmt = $pdo->query("SELECT * FROM transaction");
while ($row = $stmt->fetch()) {
    // htmlspecialchars om cross site scripting te voorkomen. 
    echo "<p>Beschrijving: " . htmlspecialchars($row['description']) . "</p>";
}
?>