<?php
session_start();
echo "<head>";
  echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">';
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
  echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
  echo '<link rel="stylesheet" href="myCSS.css">';
  echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo "</head>";

echo "<h4>".$_SESSION['fN']." ".$_SESSION['lN']." , you have logged in</h4>";

include('formTemplateForLogged.html');

include 'viewAds.php';






 ?>
