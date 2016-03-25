<?php 
include("connection.php");

$title = $_POST["title"];
$description = $_POST["description"];
$postDate = $_POST["dateposted"];
$fixedDate = $_POST["datefixed"];

$sql = INSERT INTO bugs(title, desc, postDate, fixedDate) VALUES('$title','$description', '$postDate', '$fixedDate');
mysqli_query($db,$sql);

?>
<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset = "UTF-8">
    <title>Bugs</title>
  </head>
  <body>
    <h1>I am here</h1>
  </body>
