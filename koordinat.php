<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="https://maps.googleapis.com/maps/api/js?key= APIkeyAnda&callback=initialize" async defer></script>

 

<link href="css/theme.css" rel="stylesheet" media="all">

<title>kodingbuton.com</title>

</head>

 

<body>

<center>

<h3>Tutorial<a href="https://www.kodingbuton.com/">kodingbuton.com</a></h3>

 

<h3> Menampilkan Titik Koordinat Lokasi Menggunakan PHP dan MySQL</h3>

</center>

<br />

 

<?php

$conn=($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost", "root", "")) or die("Tidak Terkoneksi");

$db=mysqli_select_db($GLOBALS["___mysqli_ston"], "lokasi") or die ("Database Tidak Terdeteksi");

 

$info = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM wilayah");

while($row=mysqli_fetch_array($info)){

?>

 

<script type="text/javascript">

function initialize() {

  var propertiPeta = {

    center: new google.maps.LatLng(<?php echo  $row['latitude']; ?>,<?php echo  $row['longitude']; ?>),

     zoom: 14,

    mapTypeId:google.maps.MapTypeId.ROADMAP

  };

 

  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

 

  // membuat Marker

  var marker=new google.maps.Marker({

      position: new google.maps.LatLng(<?php echo  $row['latitude']; ?>, <?php echo  $row['longitude']; ?>),

      map: peta

  });

}

</script>

<center>

<h3> Titik Koordinat Lokasi: <?php echo  $row['wilayah']; ?></h3>

</center>

<div id="googleMap" style="width:auto;height:500px;"></div>

 

<?php } ?>

 

</body>

</html>