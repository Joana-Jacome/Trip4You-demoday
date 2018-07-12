<?php
$servername = "localhost";
$username = "root";
$password = "289822625Faro";
$dbname = "blog_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";
$sql = "SELECT id,name,email FROM users";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
  $data[] = $row["id"];
  $data[] = $row["name"];
  $data[] = $row["email"];

}

echo json_encode($data);
?>