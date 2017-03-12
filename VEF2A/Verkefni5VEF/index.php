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

   
   <h2> Search </h2>
  <form action="query.php" method="get">
      <input type="search" name="Innslag" value="">
  </form>

  <h2> Users </h2>
  <?php $userinfo = getUsers($conn); ?>
  <li><a href="notendur.php?nafn=<?php echo $userinfo[0][0] ?>"><?php echo $userinfo[0][0]; ?></a></li>
  <li><a href="notendur.php?nafn=<?php echo $userinfo[1][0] ?>"><?php echo $userinfo[1][0]; ?></a></li>

   <h2> Images(counter) =   <?php
    echo getImageCount($conn);
    ?> </h2>
   
    <?php
      $myndainfo = getImageId($conn);
     ?>
  
  <h2> Alphabetical order of images (ABC) </h2>
  <li><a href="myndir.php?id=<?php echo $myndainfo[0][0] ?>"><?php echo $myndainfo[0][1]; ?></a></li>
  <li><a href="myndir.php?id=<?php echo $myndainfo[1][0] ?>"><?php echo $myndainfo[1][1]; ?></a></li>
  <li><a href="myndir.php?id=<?php echo $myndainfo[2][0] ?>"><?php echo $myndainfo[2][1]; ?></a></li>
  <li><a href="myndir.php?id=<?php echo $myndainfo[3][0] ?>"><?php echo $myndainfo[3][1]; ?></a></li>




 </body>
 </html>