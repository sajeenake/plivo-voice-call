<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phlo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT number FROM forwarding_number";
$result = $conn->query($sql);
$numbers = array();
$forward_number = 0;
if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {

	 $numbers[] = $row['number'];
  }
  $forward_number = implode(",",$numbers);
} else {
  echo "0 results";
}

$conn->close();
?>