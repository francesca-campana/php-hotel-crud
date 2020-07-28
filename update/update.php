<?php
//var_dump('Ciao sono update');
//var_dump($_POST);
include __DIR__ . '/../database.php';


$room_id = $_POST['roomid'];
$room_number = $_POST['roomnumber'];
$room_floor = $_POST['roomfloor'];
$room_beds = $_POST['roombeds'];
var_dump($_POST);
// var_dump($room_number);
// var_dump($room_floor);
// var_dump($room_beds);

$sql = "UPDATE `stanze` SET `room_number` = $room_number, `floor` = $room_floor, `beds` = $room_beds WHERE `id` = $room_id";
//var_dump($sql);

$result = $conn->query($sql);
//echo 'update avvenuto';
//header('Location: ' . $basepath . '?uproom=' . $room_number);
//var_dump($results);

if ($result) {
  //echo 'update avvenuto';
  header('Location: ' . $basepath . '?uproom=' . $room_number);
} else {
  //die("Che stai combinando");
  echo 'errorone';
}

?>
