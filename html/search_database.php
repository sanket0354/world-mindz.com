<?php
require './connection.php';
// echo "before";
// $sql = "SELECT * FROM default";
$sql = 'SELECT name FROM `default` WHERE name="sanket"';
$result = $connection->query ( $sql );


 if ($result->num_rows > 0) {
echo "Somethign";
// output data of each row
while($row = $result->fetch_assoc()) {
echo "name: " . $row["name"];
}
} else {
echo "0 results";
}
$connection->close ();

?>