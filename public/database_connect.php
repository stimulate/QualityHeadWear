<?php
// create connection
$mysqli = new mysqli("localhost", "yuh46", "02011987", "yuh46mysql2");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";
  
// create SQL statement 
$sql = "INSERT INTO Employees(FirstName,LastName,Title)
        VALUES('" . $_POST['paper_author'] . "','" 
		         . $_FILES["paper_file"]["name"] . "','" 
				 . $_POST['paper_title'] . "')"; 
				 
// execute SQL statement and get results 
if (!$mysqli->query($sql)) {
    echo "SQL operation failed: (" . $mysqli->errno . ") " . $mysqli->error;
} 
?>
