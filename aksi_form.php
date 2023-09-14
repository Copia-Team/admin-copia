<?php

  //print_r($_POST);

include "connect.php"; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "<p>";
 $sql = "INSERT INTO pasar (pasar, latitude, longitude)
VALUES ('".$_POST["pasar"]."', '".$_POST["latitude"]."', '".$_POST["longitude"]."')";

if ($conn->query($sql) === TRUE) {
  //echo "Data baru dengan nama ".$_POST["nama"]." telah disimpan ke db";
  header("Location:pasar.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>