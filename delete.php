<?php
include "connect.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM pasar WHERE id_pasar=".$_GET["id_pasar"];

if (mysqli_query($conn, $sql)) {
    header("Location:pasar.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>