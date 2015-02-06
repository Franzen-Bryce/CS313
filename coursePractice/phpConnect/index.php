<?php 

include '/phpTest.php';

$conn = databaseConnectionUser();

$sql = "SELECT name FROM actor WHERE name ='Mark Hammill'";

$statement = $conn->prepare($sql);
While ($row = $statement->fetch(PDO::FETCH_ASSOC)){
	echo "Found: " . $row['name'] . "<br>\n";
}


?>

