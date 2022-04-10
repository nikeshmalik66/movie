
<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "hollywood";
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>