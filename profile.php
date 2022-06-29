<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
    echo "sr_no: " . $row["sr_no"]. " - Name: " . $row["full_name"]. " ";
  }
}
else {
  echo "0 results";
}
$conn->close();
?>