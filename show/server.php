<?php

include __DIR__ . '/../database.php';

$room_id = $_GET['id'];

$sql = "SELECT * FROM `stanze` WHERE `id`= $room_id ";
$results = $conn->query($sql);

// Costruisco la variabile con le stanze
if ($results && $results->num_rows > 0) {
  // ho i risultati
  $room = $results->fetch_assoc();

} elseif ($results) {
  echo 'No results';
  // 0 risultati

} else {
  // Errore della query
  die("Query error");
}
$conn->close();

 ?>
