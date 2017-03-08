<?php

include_once 'dbconnect.php';

echo '<h1>Our Guests</h1>'


$sql = "SELECT id, firstname, lastname, roomsize, checkin FROM HoltelGuests";
$hotelresult = $db -> query($sql);

if ($hotelresult -> num_rows > 0) {
	
	while ($row = $hotelresult -> fetch_assoc()) {
		echo 'Guest ID:' . $row['id'] . '<br>name: ' . $row[;'firstname'] . '' . $row['lastname'] . '<br>roomsize:' . $row['roomsize'] . '<br>check In type: ' . $row['checkin'] . '<br><br>';
	}
} else {
	echo 'no results to display.';
}

$db -> close();


?>