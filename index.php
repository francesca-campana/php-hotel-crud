<?php include __DIR__ . '/env.php'; ?>
<?php include __DIR__ . '/server.php'; ?>

    <?php include __DIR__ . '/partials/header.php'; ?>
    <main>
      <!-- Tabella -->
      <table>

        <thead>
          <tr>
            <th>ID</th>
            <th>Room number</th>
            <th>Floor</th>
          </tr>
        </thead>
        <!-- Fine Colonne -->

        <tbody>
          <!-- Singola Stanza -->
          <?php foreach ($rooms as $room) {?>
          <tr>
            <td><?php echo $room['id']; ?></td>
            <td><?php echo $room['room_number']; ?></td>
            <td><?php echo $room['floor']; ?></td>
            <td>
              <a href="<?php echo $basepath . '/show/show.php?id=' . $room['id']; ?>">View</a>
            </td>
          </tr>
          <?php } ?>
          <!-- Fine Singola Stanza -->
        </tbody>

      </table>
    <!-- Fine Tabella -->
    </main>

  </body>
</html>
