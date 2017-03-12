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
   $nafn = $_GET['nafn'];
   echo '<h1>' . $nafn . '</h1>';
   $myndirNotenda = getUserImages($conn, $nafn);
   foreach ($myndirNotenda as $key => $value) {
     echo "<br>";
     echo '<h3>' . $value['myndaheiti'] . '</h3>';
     echo '<img src="myndir/' . $value['skraarheiti'] . '" width = 200 height = 200>';
   }
   ?>
</body>
 </html>