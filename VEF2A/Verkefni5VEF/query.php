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
    $Search = $_GET['Innslag'];
    $upplysingar = getImage($conn, $Search);
    
    echo '<img src ="myndir/' . $upplysingar['skraarheiti'] . '" width="200" height="200">';
    
     ?>

 </body>
  </html>