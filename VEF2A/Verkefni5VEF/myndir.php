<?php
include 'connection.php';
include 'functions.php';
 ?>
 <html>
 <head>
 <title> V5 </title>
 <meta charset="utf-8"> 
 <link rel="stylesheet" type="text/css" href="colorful.css">
 </head>
 <body>
   <?php
   $id = $_GET['id'];
   $upplysingar = getImageInfo($conn, $id); 
    ?>
  <h1><?php echo $upplysingar['myndaheiti']; ?></h1>
  <img src="myndir/<?php echo $upplysingar['skraarheiti']?>" width="200" height="200"> 
  <h2> Notandi: <?php echo $upplysingar['nafn']; ?></h2>
  <p> Lysing: <?php echo $upplysingar['textalysing']; ?> 
</body>
 </html>