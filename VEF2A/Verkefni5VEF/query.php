<?php
 include 'connection.php';
 include 'functions.php';
  ?>
  <html>
  <head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="colorful.css">
  </head>
  <body>
    <?php
    $Search = $_GET['Innslag'];
    $upplysingar = getImage($conn, $Search);
    
    echo '<img src ="myndir/' . $upplysingar['skraarheiti'] . '" width="500" height="500">';
    
     ?>

 </body>
  </html>