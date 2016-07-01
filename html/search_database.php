<?php
require './connection.php';

$sql = 'SELECT name FROM `default` WHERE name="sanket"';
$result = $connection->query ( $sql );


 if ($result->num_rows > 0) {

// output data of each row
while($row = $result->fetch_assoc()) {
echo "name: " . $row["name"] . "<br>";
}
} else {
echo "0 results";
}
$connection->close ();

?>