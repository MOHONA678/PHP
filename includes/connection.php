<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "test_quickbuy";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection Failed!");
} else {
//   echo "Database Connected";
}
?>