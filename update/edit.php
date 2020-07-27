
<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/../partials/header.php'; ?>


<main>
  <h2>Modifica stanza numero </h2>

  <form class="" action="<?php echo $basepath . '/update/update.php'; ?>" method="post">
    <input type="hidden" name="roomid" value="<?php echo $room['id']; ?>">

    <div class="">
      <label>Room number</label>
      <input type="text" name="roomnumber" value="<?php echo $room['room_number']; ?>">
    </div>
    <div class="">
      <label>Floor</label>
      <input type="text" name="roomfloor" value="<?php echo $room['floor']; ?>">
    </div>
    <div class="">
      <label>Beds</label>
      <input type="text" name="roombeds" value="<?php echo $room['beds']; ?>">
    </div>
    <div class="">
      <input type="submit" name="" value="Salva">
    </div>

  </form>
</main>
