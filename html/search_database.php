<?php
require './connection.php';



$sql = 'SELECT * FROM `default` WHERE name LIKE "%' . $search_term . '%"';

$result = $connection->query ( $sql );

$count = 0;

if ($result->num_rows > 0) {
	
	// output data of each row
	while ( $row = $result->fetch_assoc () ) {
		
		$search_link [$count] = $row ["link"];
		$search_name [$count] = $row ["name"];
		$search_description [$count] = $row ["description"];
		
		$count ++;
	}
} else {
	echo "0 results";
}
/*
 * for($x = 0; $x < count($search_link); $x++) {
 * echo $search_link[$x];
 * echo $search_name[$x];
 * echo $search_description[$x];
 * echo "<br>";
 * }
 */
$escaped_link = json_encode ( $search_link );
$escaped_name = json_encode ( $search_name );
$escaped_description = json_encode ( $search_description );
echo "<script type='text/javascript'> test($escaped_link,$escaped_name,$escaped_description);</script>";

$connection->close ();

?>
