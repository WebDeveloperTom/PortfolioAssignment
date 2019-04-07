<?php

$host = 'localhost'; //location of clients DB

$db ='tompqwoc_dotdevcontact';
$user ='root';
$dbPass ='';
// $db =
$conn = new mysqli($host, $user, $dbPass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected";

 ?>
