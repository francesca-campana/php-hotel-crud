<?php include __DIR__ . '/../env.php'; ?>
<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/../partials/header.php'; ?>

<main>

  <h2>Sei nella stanza n°: <?php echo $room['room_number']; ?></h2>
  <ul>
    <li>ID: <?php echo $room['id']; ?></li>
    <li>Room number: <?php echo $room['room_number']; ?></li>
    <li>Floor: <?php echo $room['floor']; ?></li>
    <li>Beds: <?php echo $room['beds']; ?></li>
    <li>Created at: <?php echo $room['created_at']; ?></li>

  </ul>
</main>
