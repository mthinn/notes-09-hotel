<?php
include_once 'dbconnect.php';


$first_name = mysqli_real_escape_string($db $_POST['firstname']);
$last_name = mysqli_real_escape_string($db $_POST['lastname']);
$room_size = $_POST['roomsize'];
$check_in = $_POST['checkin'];



$hotel_insert = "INSERT INTO HotelGuests (firstname, lastname, roomsize, checkin) VALUES ('$first_name', '$last_name', '$room_size', '$check_in')";

if (mysqli_query($db, $hotel_insert)){
	echo '<br>DEBUG / records added.';
} else {
	echo '<br>DEBUG / could not add records: ' . mysqli_error($db);
}

?>
