<?php
$servername = getenv('127.0.0.1');
$username = 'hoteladm';
$password = 'dragon';
$dbname = 'hotel';
$database = 'hotel';
$dbport = 8888;

$db = new mysqli($servername, $username, $password, $database, $dbport );

if ($db -> connect_error) {
	die('DEBUG / Connection Failed: ' . $db -> connect_error);
}

	echo 'DEBUG / Connection successful: ' . $db -> host_info;




//select the database that will store and retrieve data.
mysqli_select_db($db, $dbname);

if (empty($result)) {
	$sql = "CREATE TABLE HotelGuests(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	    fristname VARCHAR(30) NOT NULL,
	    lastname VARCHAR(30) NOT NULL,
	    roomsize VARCHAR(50),
	    checkin VARCHAR(50)
         )";

         if ($db -> query($sql)=== TRUE){
         	echo '<br>DEBUG / Table created successful.';
         } else {
         	echo '<br>DEBUG / Table creation Failed:' . $db -> error;
         };
    
}

?>