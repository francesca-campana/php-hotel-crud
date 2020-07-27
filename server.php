<?php

include __DIR__ . '/database.php';

$sql = "SELECT * FROM `stanze`";
$results = $conn->query($sql);

// Costruisco la variabile con le stanze
if ($results && $results->num_rows > 0) {
  $rooms = [];

  // ho i risultati
  while($row = $results->fetch_assoc()) {
    $rooms[] = $row;
  }
} elseif ($results) {
  // 0 risultati
  $rooms = [];
} else {
  // Errore della query
  die("Query error");
}
$conn->close();

 ?>
