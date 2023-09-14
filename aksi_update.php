<?php
include "connect.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo $sql = "UPDATE pasar 
        SET pasar='".$_POST["pasar"]."', latitude='".$_POST["latitude"]."',
            longitude='".$_POST["longitude"]."'
        WHERE id_pasar=".$_POST["id_pasar"];

if (mysqli_query($conn, $sql)) {
    header("Location:index.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>